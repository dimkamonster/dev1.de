<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 26.11.13
 * Time: 18:39
 */

function validate_restore_pwd($allSubmitted){
    $message = "";
//    $password = $allSubmitted['pword'];
    $login = trim($allSubmitted['login']);
    require_once "functions.php";
    if (strlen($login) == "") {
        $message = $message."Please, enter login! ".restore_login_link."<br />";
    } else if (check($login,0))
        $message = $message."Login must be in english, and have A-Z..a-z and _ symbols!<br />";
//    if (strlen($password) == "")
//        $message = $message."Please, enter password. ".restore_pwd_link."<br />";
    if ($message == "") {
        $message = "OK";
    }
    return $message;
}

function mail_reset_link() {
    $log = trim($_POST['login']);
    $login = $log; //mysql_real_escape_string($log);
    global $smarty;
    if (validate_restore_pwd($_POST) == "OK") {
        $sql = "SELECT login,email,password FROM ".mysqltable." WHERE login='".$login."';"; //check if login is exist
        require_once "functions.php";
        $result = db_query($sql);
        if ($result) {
            $row = mysqli_fetch_array($result,MYSQLI_BOTH);
//  If login found - compile SQL-string with hash sent to user and data_time of server, make letter to user
//  with link to site and action=reset&h=$hash
            if ($row['login']!="") { //if login was found - check if link to reset was already sent.
//              After - write to base, compile email and send it to user
                require_once "functions.php";
                $validtill = time()+remind_lifetime;
                $hash = getpwd($row['login'],$row['email'],$row['password']+$validtill);
                $resetlink = resetlinkstart.$hash;
//                $validtill = time()+remind_lifetime;
//              make query to remind table, if exist - update row with new hash and valid time
                $sql = "SELECT id, login, date FROM ".mysqlrestoretable." WHERE login='".$row['login']."';";
                $result2 = db_query($sql);
                if ($result2) {
                    $row2 = mysqli_fetch_array($result2,MYSQLI_BOTH);
                    if ($row2['id']!="") { //if letter was sent earlier - compile new mail and update record with new lifetime
                        $sql2 = "UPDATE ".mysqlrestoretable." SET hash='".$hash."',
                                date=".$validtill." WHERE id=".$row2['id'].";";
                        $result2_1 = db_query($sql2);
                        if ($result2_1) {
                            if (sendmail($row['email'],'resetlink',$row['login'],$resetlink,$validtill)) {
                                $smarty->assign('restorepwd','1');
                                $smarty->assign('resetlink',$resetlink);
                                $_GET['action']='restorepage';
                            }
                            else die('error while sending reset link to not logged in registered user');
                        } else {
                            die("There's been a problem: ".mysql_error());
                        }
                    } else //if in base no record of earlier mail - insert new record and compile & send new mail
                    {
                        $sql = "INSERT INTO ".mysqlrestoretable." (login, hash, date) values
                                ('".$row['login']."', '".$hash."', ".$validtill.");";
                        $result2_2 = db_query($sql);
                        if ($result2_2) {
                            if (sendmail($row['email'],'resetlink',$row['login'],$resetlink,$validtill)) {
                                $smarty->assign('restorepwd','1');
                                $smarty->assign('resetlink',$resetlink);
                                $_GET['action']='restorepage';
                            }
                            else die('error while sending reset link to not logged in registered user');
                        } else {
                            die("There's been a problem: ".mysql_error());
                        }
                    }
                } else {
                    echo "There's been a problem: ".mysql_error();
                }
            } else {

                $smarty->assign('register_error',"Cannot find such user $login!<br />" );
                $_GET['action']='err';
            }
        } else {
            echo "There's been a problem: ".mysql_error();
        }

    }
    else {
        $smarty->assign('register_error',validate_restore_pwd($_POST));
        $_GET['action']='err';
    }

}

?>