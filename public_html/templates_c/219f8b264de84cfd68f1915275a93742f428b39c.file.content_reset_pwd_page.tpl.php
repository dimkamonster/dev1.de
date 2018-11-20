<?php /* Smarty version Smarty-3.1.14, created on 2018-11-17 15:13:55
         compiled from "/var/www/html/dev1.de/public_html/templates/page/content_reset_pwd_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19779285305bf03033236a09-74010991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '219f8b264de84cfd68f1915275a93742f428b39c' => 
    array (
      0 => '/var/www/html/dev1.de/public_html/templates/page/content_reset_pwd_page.tpl',
      1 => 1541266627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19779285305bf03033236a09-74010991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bf0303344d1b4_16670937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf0303344d1b4_16670937')) {function content_5bf0303344d1b4_16670937($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['username']->value=='nope123nope!@'){?>
    <p>Reset password for user <?php echo $_GET['login'];?>
</p><br />
<?php }else{ ?>
    <p>Reset password for user <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p><br />
<?php }?>
<form action="index.php" method="POST">
    <input name="action" type="hidden" id="reset" value="do_reset">
    <?php if ($_smarty_tpl->tpl_vars['username']->value=='nope123nope!@'){?>
        <input name="login" type="hidden" id="lg" value="<?php echo $_GET['login'];?>
">
    <?php }else{ ?>
        <input name="login" type="hidden" id="lg" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">
    <?php }?>
    <input name="hash" type="hidden" id="hash" value="<?php echo $_GET['h'];?>
">
    New password: <input type="password" name="pword[]" autofocus/>*<br /><br />
    Repeat new Password: <input type="password" name="pword[]"/>*<br /><br />
    All Fields with * are necessary<br /><br />
    <input type="submit" value="GO" />
    <input type="reset" value="Reset form">
</form><?php }} ?>