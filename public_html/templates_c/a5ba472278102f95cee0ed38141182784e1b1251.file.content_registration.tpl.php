<?php /* Smarty version Smarty-3.1.14, created on 2018-11-04 00:58:08
         compiled from "/var/www/html/dev1.de/public_html/templates/page/content_registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8432182395bde44201ff627-86620821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5ba472278102f95cee0ed38141182784e1b1251' => 
    array (
      0 => '/var/www/html/dev1.de/public_html/templates/page/content_registration.tpl',
      1 => 1541266627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8432182395bde44201ff627-86620821',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bde44202019e6_06835366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bde44202019e6_06835366')) {function content_5bde44202019e6_06835366($_smarty_tpl) {?><h1>Enter registration data:</h1>
<form action="index.php" method="POST">
    <input name="action" type="hidden" id="reg" value="do_register">
    Login: <input type="text" name="login" autofocus/>*<br /><br />
    Email: <input type="text" name="email" />*<br /><br />
    Password: <input type="password" name="pword[]" />*<br /><br />
    Repeat Password: <input type="password" name="pword[]"/>*<br /><br />
    All Fields with * are necessary<br /><br />
    <input type="submit" value="GO" />
    <input type="reset" value="Reset form">
</form><?php }} ?>