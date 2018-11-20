<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dmitry
 * Date: 15.10.13
 * Time: 8:01
 * To change this template use File | Settings | File Templates.
 */
function parse()
{
//    global $smarty;
    if (isset($_GET['action'])) {
        if ($_GET['action']=="list") {
            if (isset($_SESSION['login'])) {
                require_once "listout.php";
                listout();
            }
        }
        if ($_GET['action']=="logout") {
            require_once "functions.php";
            logout();
        }
        if ($_GET['action']=="reset"){
//            $GLOBALS['hash'] = $_GET['h'];
            require_once "reset_password.php";
            check_hash();
        }
    }
    elseif (isset($_POST['action'])) {
        if ($_POST['action']=="do_register") {
            require_once "registration_action.php";
            adduser();
        }
        if ($_POST['action']=="do_login") {
            require_once 'Login.php';
            loginuser();
        }
        if ($_POST['action']=="do_remind_login") {
            require_once "restore_login.php";
            restore_login();
        }
        if ($_POST['action']=="do_remind_pwd") {
            require_once "mail_reset_pwd.php";
            mail_reset_link();
        }
        if ($_POST['action']=="do_reset"){
            require_once "reset_password.php";
            change_password();
        }
    }
    elseif (isset($_POST['add'])) {
        if ($_POST['to_add'] == 'from_listout') {
            //TODO : show add new user form
        }
        elseif ($_POST['to_add'] == 'from_adding') {
            //TODO : add new user
        }
    }
    elseif (isset($_POST['del'])) {
        //TODO : add delete selected user from admin listout
        require_once "listout_admin.php";
        delete_($_POST);
    }
//    else $smarty->display('index.tpl');
    }
?>