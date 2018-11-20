<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 05.11.13
 * Time: 19:24
 */
function validate_login($allSubmitted){
    $message = "";
    $password = $allSubmitted['pword'];
    $login = trim($allSubmitted['login']);
    require_once "functions.php";
    if (strlen($login) == "") {
        $message = $message."Please, enter login! ".restore_login_link."<br />";
    } else if (check($login,0))
        $message = $message."Login must be in english, and have A-Z..a-z and _ symbols!<br />";
    if (strlen($password) == "")
        $message = $message."Please, enter password. ".restore_pwd_link."<br />";
    if ($message == "") {
        $message = "OK";
    }
    return $message;
}

function loginuser() {
    global $smarty;
    require_once "setup.php";
    $log = trim($_POST['login']);
//    $login = mysql_real_escape_string($log);
    $login = $log;
    //$email = trim($_POST['email']);
    $message = "";
    if (validate_login($_POST)=="OK") { //if entered data is ok
        $sql = "SELECT login,email,password,rights FROM ".mysqltable." WHERE login='".$login."';"; //check if user exist
        require_once "functions.php";
        $result = db_query($sql);
        if ($result) { //if result of query is success
            $i = 0;
            while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {//_fetch_array($result,MYSQL_BOTH)) {
                if (isset($row["login"])) { //if login found check password
                    $i++;
                    $pwd = getpwd($row["login"],$row["email"],$_POST['pword']);
                    if ($row["password"] == $pwd) $message = $message."OK";//check if password correct
                    else $message = $message."pwdwrong"; //if password not correct
                    break;
                } else {    //if login not found
                    $i++;
                    $message = $message."loginwrong";
                }
                break;
            }
            if ($i==0) $message = $message."loginwrong";//if login not found
        } else {
            echo "There's been a problem: ".mysql_error();
        }
        if ($message == "pwdwrong") {
            $err = "Please enter correct password and try again. ".restore_pwd_link;
            $smarty->assign('pwdwrong',$err);
            $_GET['action']='err';
        } else if ($message == "loginwrong") {
            $err = "This user is not registered. Please enter correct login and try again. ".restore_login_link;
            $smarty->assign('loginwrong',$err);
            $_GET['action']='err';
        } else if ($message == "OK") { //if login and password is match - begin session and etc.
            session_start();
            $_SESSION['login'] = $row["login"];
            $_SESSION['email'] = $row['email'];
            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['admin'] = $row['rights'];
            refresh_page_in_seconds();
        } else die("<br>Something is WRONG! <br>");

    }
    else { //if entered data is not ok
        $smarty->assign('register_error',validate_login($_POST));
        $_GET['action']='err';
//        echo "<p> Some troubles appear:</p>";
//        echo validate_login($_POST);
//        echo "<p>Please, try again!</p>";
//        echo '<input type="button" value="Back" onclick="history.back()"/>';
//        die;
    }
}
?>