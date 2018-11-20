<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 28.11.13
 * Time: 10:15
 */
function validate_restore_login($allSubmitted){
    $message = "";
//    $password = $allSubmitted['pword'];
    $email = trim($allSubmitted['email']);
    require_once "functions.php";
    if (strlen($email) == "") {
        $message = $message."E-mail must be set!<br />";
    } else
    {
        if (!check($email,1))
        {
            $message = $message.'E-mail must be like somename@domain.com<br />';
        }
    }
    if ($message == "") {
        $message = "OK";
    }
    return $message;
}

function restore_login() {
    $eml = trim($_POST['email']);
    //$email = mysql_real_escape_string($eml);
    $email = $eml;
    global $smarty;
    if (validate_restore_login($_POST) == "OK") {
        $sql = "SELECT login FROM ".mysqltable." WHERE email='".$email."';"; //check if email is exist
        require_once "functions.php";
        $result = db_query($sql);
        if ($result) {
            while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){
                $login = $row['login'];
            }
            if (isset($login)) {
                $smarty->assign('restoredlogin',$login);
                $_GET['action']='restorepage';
            } else {
                $smarty->assign('register_error',"Cannot find user with email $email!<br />" );
                $_GET['action']='err';
            }
        } else {
            echo "There's been a problem: ".mysql_error();
        }
    }
    else {
            $smarty->assign('register_error',validate_restore_login($_POST));
            $_GET['action']='err';
    }


}


?>