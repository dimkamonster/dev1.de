<?php
////phpinfo();
//if (mail("qwe@www.com","sssuuubbbjjj","msg1\n msg2\n msg3"))
//    echo "OK";
//else echo "wrong";
////phpinfo();
//die;
session_start();
require_once('setup.php');
//
$smarty->assign('title',PAGE_TITLE);
$smarty->assign('smarty_name',$name);

if (isset($_SESSION['login']))
{
    $smarty->assign('username',$_SESSION['login']);
}
    else {
        $smarty->assign('username','nope123nope!@');
    }
require_once 'parse.php';
parse();


$smarty->display('index.tpl');


?>
