<?php /* Smarty version Smarty-3.1.14, created on 2018-11-04 00:57:51
         compiled from "/var/www/html/dev1.de/public_html/templates/page/Nav_menu_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13379993555bde440f84bf79-34062769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e447875078e3775800e9d0c4097b688aa76f15a' => 
    array (
      0 => '/var/www/html/dev1.de/public_html/templates/page/Nav_menu_login.tpl',
      1 => 1541266627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13379993555bde440f84bf79-34062769',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bde440f858837_69357651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bde440f858837_69357651')) {function content_5bde440f858837_69357651($_smarty_tpl) {?><form action="index.php" method="POST">
    <input name="action" type="hidden" id="log" value="do_login">
    Login:<br />
    <?php if ($_GET['action']=="register"||$_GET['action']=="remind_login"||$_GET['action']=="remind_pwd"){?>
        <input type="text" name="login"/><br />
    <?php }else{ ?>
    <input type="text" name="login" autofocus/><br />
    <?php }?>
    <p style="font-size:8pt"><a href="?action=remind_login">Forget Login?</a></p>
    
    Password:<br />
    <input type="password" name="pword" /><br />
    <p style="font-size:8pt"><a href="?action=remind_pwd">Forget Password?</a></p>
    
    <input type="submit" value="Sign In" />
    <input type="reset" value="Reset form">
</form>

<p><a href="?action=register">Register</a></p><?php }} ?>