<?php /* Smarty version Smarty-3.1.14, created on 2018-11-04 00:57:51
         compiled from "/var/www/html/dev1.de/public_html/templates/page/Content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12058276395bde440f85ad65-93991364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2f57936f8dec0461522945f62ab176742832ab9' => 
    array (
      0 => '/var/www/html/dev1.de/public_html/templates/page/Content.tpl',
      1 => 1541266627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12058276395bde440f85ad65-93991364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bde440f8838d4_09636119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bde440f8838d4_09636119')) {function content_5bde440f8838d4_09636119($_smarty_tpl) {?>
<td width=70% valign=top style='border:none;'>
    <?php if ($_smarty_tpl->tpl_vars['username']->value=='nope123nope!@'){?>
        <?php if ($_GET['action']=='registered'){?>
            <?php echo $_smarty_tpl->getSubTemplate ('page/content_user_added.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }elseif($_GET['action']=='register'){?>
            <?php echo $_smarty_tpl->getSubTemplate ('page/content_registration.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }elseif($_GET['action']=='err'){?>
            <?php echo $_smarty_tpl->getSubTemplate ('page/content_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }elseif($_GET['action']=='remind_pwd'){?>
            <?php echo $_smarty_tpl->getSubTemplate ('page/content_restore_password.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }elseif($_GET['action']=='remind_login'){?>
            <?php echo $_smarty_tpl->getSubTemplate ('page/content_restore_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }elseif($_GET['action']=='restorepage'){?>
            <?php echo $_smarty_tpl->getSubTemplate ('page/content_restorepage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }elseif($_GET['action']=='reset'){?>
            <?php echo $_smarty_tpl->getSubTemplate ('page/content_reset_pwd_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
        <?php }else{ ?>
            <?php echo $_smarty_tpl->getSubTemplate ('page/content_unregistered.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>
    <?php }elseif($_GET['action']=='list'){?>
        <?php echo $_smarty_tpl->getSubTemplate ('page/content_listout.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }elseif($_GET['action']=='change'){?>
        <?php echo $_smarty_tpl->getSubTemplate ('page/content_reset_pwd_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }elseif($_GET['action']=='restorepage'){?>
        <?php echo $_smarty_tpl->getSubTemplate ('page/content_restorepage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
</td>
</tr>
<tr><?php }} ?>