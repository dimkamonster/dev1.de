<?php /* Smarty version Smarty-3.1.14, created on 2018-11-04 00:58:04
         compiled from "/var/www/html/dev1.de/public_html/templates/page/content_restore_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2408362255bde441c73aac7-04901870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '273a19fd2e653e66c8a120978137c656e56a2304' => 
    array (
      0 => '/var/www/html/dev1.de/public_html/templates/page/content_restore_login.tpl',
      1 => 1541266627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2408362255bde441c73aac7-04901870',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bde441c751d53_44818559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bde441c751d53_44818559')) {function content_5bde441c751d53_44818559($_smarty_tpl) {?>
<form action="index.php" method="POST">
    <input name="action" type="hidden" id="remind" value="do_remind_login">
    Enter E-mail used for registration:<br />
    <input type="text" name="email" autofocus/><br /><br />
    <input type="submit" value="Submit" />
</form>
<?php }} ?>