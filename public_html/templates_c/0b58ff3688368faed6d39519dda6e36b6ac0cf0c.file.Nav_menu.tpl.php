<?php /* Smarty version Smarty-3.1.14, created on 2018-11-04 00:57:51
         compiled from "/var/www/html/dev1.de/public_html/templates/page/Nav_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11615300305bde440f8433f8-59967088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b58ff3688368faed6d39519dda6e36b6ac0cf0c' => 
    array (
      0 => '/var/www/html/dev1.de/public_html/templates/page/Nav_menu.tpl',
      1 => 1541266627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11615300305bde440f8433f8-59967088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bde440f84aa98_08377983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bde440f84aa98_08377983')) {function content_5bde440f84aa98_08377983($_smarty_tpl) {?>
<tr>
    <td width=20% valign=top style='border:none;border-right:solid windowtext 1.0pt;'>
        <?php if ($_smarty_tpl->tpl_vars['username']->value=='nope123nope!@'){?>
            <?php echo $_smarty_tpl->getSubTemplate ('page/Nav_menu_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }else{ ?>
            <?php echo $_smarty_tpl->getSubTemplate ('page/Nav_menu_registered.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>

        
    </td>
<?php }} ?>