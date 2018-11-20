<?php /*%%SmartyHeaderCode:1554103505290f4af759ff4-61712274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db6757452181be4373c1cd92a83ad023f27efb79' => 
    array (
      0 => '/vagrant/public/www/templates/registration.tpl',
      1 => 1385035201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1554103505290f4af759ff4-61712274',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5290f4af83e158_34844607',
  'cache_lifetime' => 5,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5290f4af83e158_34844607')) {function content_5290f4af83e158_34844607($_smarty_tpl) {?><html>
<head><title>Registration</title></head>
<body>
<h1>Enter registration data:</h1>
<form action="index.php" method="POST">
    <input name="action" type="hidden" id="action" value="do_register">
    Login: <input type="text" name="login" />*<br /><br />
    Email: <input type="text" name="email" />*<br /><br />
    Password: <input type="password" name="pword[]" />*<br /><br />
    Repeat Password: <input type="password" name="pword[]"/>*<br /><br />
    All Fields with * are necessary<br /><br />
    <input type="submit" value="GO" />
    <input type="reset" value="Reset form">
</form>

</body>
</html>
<?php }} ?>