<?php /* Smarty version Smarty-3.1.14, created on 2018-11-17 15:07:04
         compiled from "/var/www/html/dev1.de/public_html/templates/page/content_restorepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13840363825bf02e98c16f57-47080949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7f6bf30a4d251c3fac61b131c7ddacc8f2e7b05' => 
    array (
      0 => '/var/www/html/dev1.de/public_html/templates/page/content_restorepage.tpl',
      1 => 1541266627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13840363825bf02e98c16f57-47080949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'restoredlogin' => 0,
    'restorepwd' => 0,
    'resetlink' => 0,
    'resetflink' => 0,
    'resetflogged' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bf02e98ce0500_52868860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf02e98ce0500_52868860')) {function content_5bf02e98ce0500_52868860($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['restoredlogin']->value)){?>
    <p>Your login is - <?php echo $_smarty_tpl->tpl_vars['restoredlogin']->value;?>
</p>
    <p>If You forget your password, click <a href="?action=remind_pwd">HERE</a></p>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['restorepwd']->value)){?>
    <p>Link to password reset page was sent to e-mail, used in registration</p>
    <p>NOTE! This link will be available 24 hours!</p>
    <p>Link to reset is <a href="<?php echo $_smarty_tpl->tpl_vars['resetlink']->value;?>
">HERE</a></p>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['resetflink']->value)){?>
    <p>Your password has been changed!</p>
    <p>You can return to <a href=".">main page</a> and sign in with new password</p>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['resetflogged']->value)){?>
    <p>Congratulation, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
! You change your password right now!</p>
    <p>You can <a href="?action=logout">logout</a> and sign in with new password</p>
<?php }?><?php }} ?>