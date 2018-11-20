<?php /* Smarty version Smarty-3.1.14, created on 2018-11-04 00:57:51
         compiled from "/var/www/html/dev1.de/public_html/templates/page/Header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11629774545bde440f823c40-52889465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6f9290e8f1c3c605ba6c64d5fd0131d9f0b1fe8' => 
    array (
      0 => '/var/www/html/dev1.de/public_html/templates/page/Header.tpl',
      1 => 1541266627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11629774545bde440f823c40-52889465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bde440f841771_21039814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bde440f841771_21039814')) {function content_5bde440f841771_21039814($_smarty_tpl) {?>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>
<table border=0 cellspacing=0 cellpadding=10 width=100% height=100%<?php ?>>
    <tr>
        <td width=100% colspan=2 valign=top height=10% style='border:none;border-bottom:solid windowtext 1.0pt;'>
            <h3><a href="/.">Hello,
                <?php if ($_smarty_tpl->tpl_vars['username']->value=='nope123nope!@'){?>
                UNREGISTERED user!
            <?php }else{ ?>
                <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
!
            <?php }?>
            </a></h3>
            <?php if (isset($_SESSION['admin'])&&$_SESSION['admin']=='1'){?>
                <p style="font-size: 9pt">You have admin rights</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['username']->value!='nope123nope!@'){?>
                <?php if ($_GET['action']=='list'){?>
                    Table of users below
                <?php }?>
            <?php }?>
        </td>
    </tr><?php }} ?>