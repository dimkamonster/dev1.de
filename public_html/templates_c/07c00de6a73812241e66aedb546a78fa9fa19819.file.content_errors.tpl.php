<?php /* Smarty version Smarty-3.1.14, created on 2018-11-16 06:02:07
         compiled from "/var/www/html/dev1.de/public_html/templates/page/content_errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3047597795bee5d5fa9a3f0-76330769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07c00de6a73812241e66aedb546a78fa9fa19819' => 
    array (
      0 => '/var/www/html/dev1.de/public_html/templates/page/content_errors.tpl',
      1 => 1541266627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3047597795bee5d5fa9a3f0-76330769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loginisset' => 0,
    'emailisset' => 0,
    'register_error' => 0,
    'loginwrong' => 0,
    'pwdwrong' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bee5d5fd72694_45813473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bee5d5fd72694_45813473')) {function content_5bee5d5fd72694_45813473($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['loginisset']->value)){?>
    <p>User with name <?php echo $_smarty_tpl->tpl_vars['loginisset']->value;?>
 already exist. Choose another name and try again.</p>
<?php }elseif(isset($_smarty_tpl->tpl_vars['emailisset']->value)){?>
    <p>E-mail <?php echo $_smarty_tpl->tpl_vars['emailisset']->value;?>
 is already in use. Choose another one and try again.</p>
<?php }elseif(isset($_smarty_tpl->tpl_vars['register_error']->value)){?>
    <p><?php echo $_smarty_tpl->tpl_vars['register_error']->value;?>
</p>
<?php }elseif(isset($_smarty_tpl->tpl_vars['loginwrong']->value)){?>
    <p><?php echo $_smarty_tpl->tpl_vars['loginwrong']->value;?>
</p>
<?php }elseif(isset($_smarty_tpl->tpl_vars['pwdwrong']->value)){?>
    <p><?php echo $_smarty_tpl->tpl_vars['pwdwrong']->value;?>
</p>
<?php }else{ ?>
    <p>Where are you, man?</p>
<?php }?>
<input type="button" value="Back" onclick="history.back()"/><?php }} ?>