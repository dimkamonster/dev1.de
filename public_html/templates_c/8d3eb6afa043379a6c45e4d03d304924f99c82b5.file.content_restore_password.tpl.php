<?php /* Smarty version Smarty-3.1.14, created on 2018-11-04 00:58:06
         compiled from "/var/www/html/dev1.de/public_html/templates/page/content_restore_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17251960125bde441e513c47-35584802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d3eb6afa043379a6c45e4d03d304924f99c82b5' => 
    array (
      0 => '/var/www/html/dev1.de/public_html/templates/page/content_restore_password.tpl',
      1 => 1541266627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17251960125bde441e513c47-35584802',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bde441e517aa5_85073783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bde441e517aa5_85073783')) {function content_5bde441e517aa5_85073783($_smarty_tpl) {?>
<form action="index.php" method="POST">
    <input name="action" type="hidden" id="remind" value="do_remind_pwd">
    Enter Login used for registration:<br />
        <input type="text" name="login" autofocus/><br /><br />
    <input type="submit" value="Submit" />
</form>
<?php }} ?>