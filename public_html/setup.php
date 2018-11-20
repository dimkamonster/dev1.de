<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 13.11.13
 * Time: 15:42
 */
define('SMARTY_DIR', '/var/www/html/dev1.de/public_html/Smarty-3.1.14/libs/');
define('restore_pwd_link','<a href=?action=remind_pwd>Forgot your password?</a>');
define('restore_login_link','<a href=?action=remind_login>Forgot your login?</a>');
define("mysqldb", 'work');
define("mysqlhost", 'localhost');
define("mysqltable",'users');
define("mysqlrestoretable",'remind');
define("mysqlusername",'wfuser');
define("mysqlpassword",'12345q!');
define("PAGE_TITLE", "DMM Site");
define("BASE_HALLO", "Site under construction");
define("remind_lifetime",86400); //set lifetime of link to restore password - 24 hours
define("resetlinkstart", "http://dev1.de/index.php?action=reset&h=");
//if (version_compare(PHP_VERSION, '7.0.0','>=')) include_once 'mysql.php';
require_once(SMARTY_DIR.'Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = '/var/www/html/dev1.de/public_html/templates/';
$smarty->compile_dir = '/var/www/html/dev1.de/public_html/templates_c/';
$smarty->config_dir = '/var/www/html/dev1.de/public_html/configs/';
$smarty->cache_dir = '/var/www/html/dev1.de/public_html/cache/';
$smarty->caching = false;
//$smarty->cache_lifetime = 5;

//class Smarty_mySmarty extends Smarty {
//
//    function Smarty_mySmarty()
//    {
//
//        // Конструктор класса.
//        // Он автоматически вызывается при создании нового экземпляра.
//
//        $this->Smarty();
//        $this->template_dir = '/vagrant/public/www/templates/';
//        $this->compile_dir = '/vagrant/public/www/templates_c/';
//        $this->config_dir = '/vagrant/public/www/configs/';
//        $this->cache_dir = '/vagrant/public/www/cache/';
//
////        $this->caching = true;
//    }
//
//}
?>
