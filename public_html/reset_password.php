<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 29.11.13
 * Time: 18:06
 */
function validate_password($allSubmitted){
//    require_once "functions.php";
    $message = "";
    $passwords = $allSubmitted['pword'];
    if ($passwords[0] != $passwords[1]) {
        $message = $message."Passwords don't match!<br />";
    }
    if (strlen($passwords[0]) == "" && strlen($passwords[1])== "")
        $message = $message."Password must be set!<br />";
    if ($message == "") {
        $message = "OK";
    }
    return $message;
}

function check_hash(){
    global $smarty;
    $hash = $_GET['h'];
    $sql = "SELECT login,hash, date FROM ".mysqlrestoretable." WHERE hash='".$hash."';"; //check if hash is exist
    require_once "functions.php";
    $result = db_query($sql);
    if ($result) {
        $row = mysqli_fetch_array($result);
        if ($row['login']!="") //if we wrote to remind table and find record
        {
            if (time()>=$row['date']) { //if link time is expired
//                show error: link time is expired
                $message = "Link time is expired!<br />";
                $smarty->assign('register_error',$message);
                $_GET['action']='err';
            } else {// all fine,  nothing to do, show change password page
                $_GET['login']=$row['login'];
            }
        } else { // hash not found. show error: your link is not valid
            $message = "Something wrong - your link is not valid! Try again!<br />";
            $smarty->assign('register_error',$message);
            $_GET['action']='err';
        }
    } else {
        die('error mysql while getting hash from remind table'.mysql_error());
    }
}

function delete_hash($hash)
{
    require_once "functions.php";
    $sql = "DELETE FROM ".mysqlrestoretable." WHERE hash='".$hash."';";
    $result = db_query($sql);
    if ($result) return $result;
        else return mysql_error();
}
function change_password() {
//    $log = trim($_POST['login']);
//    $eml = trim($_POST['email']);
//    $login = mysql_real_escape_string($log);
//    $email = mysql_real_escape_string($eml);
//    $loginisset = FALSE;
//    $emailisset = FALSE;
    global $smarty;
    $pwds = $_POST["pword"];
    $hash = $_POST['hash'];
    if (validate_password($_POST) == "OK") {
        if ($hash!="") { //if hash was set - we change password from restore link
            $sql = "SELECT login FROM ".mysqlrestoretable." WHERE hash='".$hash."';"; //check if hash is exist
            require_once "functions.php";
            $result = db_query($sql);
            if ($result) {
                $row = mysqli_fetch_array($result);
                if ($row['login']==$_POST['login']) //everything is fine, no spoofing, update password
                {
                    $login = $row['login'];
                    $sql = "SELECT email FROM ".mysqltable." WHERE login='".$row['login']."';";
                    $result2 = db_query($sql); //select email from main table to mix new password
                    if ($result2) {
                        $row2 = mysqli_fetch_array($result2,MYSQLI_BOTH);
                        $email = $row2['email'];
                    } else die('error mysql while getting login from remind table'.mysql_error());
//                    require_once "functions.php";
                    $pwdmd5 = getpwd($login, $email, $pwds[0]);
                    $sql = "UPDATE ".mysqltable." SET password='".$pwdmd5."' WHERE login='".$login."';";
                    $result3 = db_query($sql);
                    if ($result3){
                        if (sendmail($email,'resetpwd',$login,$pwds[0])) {
                            delete_hash($hash);
                            $_GET['action']='restorepage';
                            $smarty->assign('resetflink',1);
                        } else die('error while sending mail with new password without session');
                    } else die('error mysql while updating password from restore link'.mysql_error());
                } else { // login spoofing! show error
                    $message = "Something wrong - Spoofing! Try again!<br />";
                    $smarty->assign('register_error',$message);
                    $_GET['action']='err';
                }
            } else {
                die('error mysql while getting login from remind table'.mysql_error());
            }

        } elseif (isset($_POST['login']) && $hash=="") { //if we came from password change while we sign in
          if ($_POST['login']!=$_SESSION['login']) {
              $message = "Something wrong - login spoofing! Try again!<br />";
              $smarty->assign('register_error',$message);
              $_GET['action']='err';
          } else {
              $sql = "SELECT login,email FROM ".mysqltable." WHERE login='".$_POST['login']."';";
              require_once "functions.php";
              $result = db_query($sql);
              if ($result) {
                  $row = mysqli_fetch_array($result);
                  $pwdmd5 = getpwd($row['login'], $row['email'], $pwds[0]);
                  $sql = "UPDATE ".mysqltable." SET password='".$pwdmd5."' WHERE login='".$row['login']."';";
                  $result = db_query($sql);
                  if ($result){
                      if (sendmail($row['email'],'resetpwd',$row['login'],$pwds[0])) {
                          $_GET['action']='restorepage';
                          $smarty->assign('resetflogged',1);
                      } else die('error while sending mail with new password in session');
                  } else die('error mysql while updating password to registered user'.mysql_error());
              } else die('error mysql while getting email from main table to mix password for registered user'.mysql_error());
          }
        }
    } else {
        $smarty->assign('register_error',validate_password($_POST));
        $_GET['action']='err';
    }

}

?>