<?php /* Smarty version Smarty-3.1.14, created on 2018-11-17 15:31:16
         compiled from "/var/www/html/dev1.de/public_html/templates/page/content_listout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10375155065bf034441c5d16-58517368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '748c56cbd44a8ca1b7c7806ac5c7492946d83d1b' => 
    array (
      0 => '/var/www/html/dev1.de/public_html/templates/page/content_listout.tpl',
      1 => 1541266627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10375155065bf034441c5d16-58517368',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bf0344439e960_72231655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf0344439e960_72231655')) {function content_5bf0344439e960_72231655($_smarty_tpl) {?>
<?php if (isset($_SESSION['admin'])&&$_SESSION['admin']=='1'){?>
    <?php echo $_smarty_tpl->getSubTemplate ("page/content_listout_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ("page/content_listout_user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php }} ?>