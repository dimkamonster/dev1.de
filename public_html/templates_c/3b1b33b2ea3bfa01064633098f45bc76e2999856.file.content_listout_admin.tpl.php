<?php /* Smarty version Smarty-3.1.14, created on 2018-11-17 15:31:16
         compiled from "/var/www/html/dev1.de/public_html/templates/page/content_listout_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1412136765bf034443a8c52-25743667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b1b33b2ea3bfa01064633098f45bc76e2999856' => 
    array (
      0 => '/var/www/html/dev1.de/public_html/templates/page/content_listout_admin.tpl',
      1 => 1541266627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1412136765bf034443a8c52-25743667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ref' => 0,
    'table' => 0,
    'str' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5bf034446a1c73_95325481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf034446a1c73_95325481')) {function content_5bf034446a1c73_95325481($_smarty_tpl) {?>
<script>function showPrevPages()
    {
        var myDiv = document.getElementById("prevpage");
        if(myDiv.style.display == "none")
        {
            myDiv.style.display = "block";
        } else {
            myDiv.style.display = "none";
        }
        return false;
    }</script>

<form action="index.php" method="POST">
    <input name="to_add" type="hidden" id="to_add" value="from_listout">
    <table border="0" cellspacing=0 cellpadding=3>
        <thead>
        <caption>List of users for admin</caption>
        <tr>
            <th style='border:none;border-top:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-left:solid windowtext 1.0pt;'>&nbsp</th>
            <th style='border:none;border-top:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
                <a href="?action=list<?php echo $_smarty_tpl->tpl_vars['ref']->value['login'];?>
">Login</a>
                <?php if ($_smarty_tpl->tpl_vars['ref']->value['orderby']=="login"){?>
                    <?php if ($_smarty_tpl->tpl_vars['ref']->value['direction']=="0"){?>&#8593;<?php }else{ ?>&#8595;
                    <?php }?><?php }?></th>
            <th style='border:none;border-top:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
                <a href="?action=list<?php echo $_smarty_tpl->tpl_vars['ref']->value['email'];?>
">E-mail adress</a>
                <?php if ($_smarty_tpl->tpl_vars['ref']->value['orderby']=="email"){?>
                    <?php if ($_smarty_tpl->tpl_vars['ref']->value['direction']=="0"){?>&#8593;<?php }else{ ?>&#8595;
                    <?php }?><?php }?></th>
            <th style='border:none;border-top:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
                <a href="?action=list<?php echo $_smarty_tpl->tpl_vars['ref']->value['date'];?>
">Creation date and time</a>
                <?php if ($_smarty_tpl->tpl_vars['ref']->value['orderby']=="date"){?>
                    <?php if ($_smarty_tpl->tpl_vars['ref']->value['direction']=="0"){?>&#8593;<?php }else{ ?>&#8595;
                    <?php }?><?php }?></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['str'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['str']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['str']->key => $_smarty_tpl->tpl_vars['str']->value){
$_smarty_tpl->tpl_vars['str']->_loop = true;
?>
            <tr>
                <td style='border:none;border-bottom:solid windowtext 1.0pt;border-left:solid windowtext 1.0pt;'>
                    <input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['str']->value['login'];?>
">&nbsp</td>
                <td style='border:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
                    <?php echo $_smarty_tpl->tpl_vars['str']->value['login'];?>
</td>
                <td style='border:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
                    <?php echo $_smarty_tpl->tpl_vars['str']->value['email'];?>
</td>
                <td style='border:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
                    <?php echo $_smarty_tpl->tpl_vars['str']->value['create_date'];?>
</td>
                <td>&nbsp<a href="?action=edit&record=<?php echo $_smarty_tpl->tpl_vars['str']->value['login'];?>
">Edit</a></td>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="?action=delete&record=<?php echo $_smarty_tpl->tpl_vars['str']->value['login'];?>
">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <br />
    <input type="submit" name = "add" value="Add new user" />
    <input type="submit" name = "del" value="Delete selected" onClick="confirm('Это сообщение!')" />
    <input type="reset" value="Reset form">
</form>
<br />
<table border="0"> 
    <thead>
    <caption>Page navigation</caption>
    <tr>
        <th width = "70%"></th>
        <th>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['ref']->value['page']>=4){?><a href="?action=list&page=1&orderby=<?php echo $_smarty_tpl->tpl_vars['ref']->value['orderby'];?>
&direction=<?php echo $_smarty_tpl->tpl_vars['ref']->value['direction'];?>
&onpagelimit=<?php echo $_smarty_tpl->tpl_vars['ref']->value['onpagelimit'];?>
">First&nbsp</a><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ref']->value['page']!=1){?><a href="?action=list&page=<?php echo $_smarty_tpl->tpl_vars['ref']->value['page']-1;?>
&orderby=<?php echo $_smarty_tpl->tpl_vars['ref']->value['orderby'];?>
&direction=<?php echo $_smarty_tpl->tpl_vars['ref']->value['direction'];?>
&onpagelimit=<?php echo $_smarty_tpl->tpl_vars['ref']->value['onpagelimit'];?>
">Prev</a><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ref']->value['page']>=6){?>
                <a href="?action=list&page=1&orderby=<?php echo $_smarty_tpl->tpl_vars['ref']->value['orderby'];?>
&direction=<?php echo $_smarty_tpl->tpl_vars['ref']->value['direction'];?>
&onpagelimit=<?php echo $_smarty_tpl->tpl_vars['ref']->value['onpagelimit'];?>
">1&nbsp</a>
                <a href="javascript:;" onclick=showPrevPages()>...</a>
                <span id=prevpage style="display: none">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['name'] = 'pagefirst';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'] = (int)2;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ref']->value['page']-3) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['total']);
?>
                        <a href="?action=list&page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pagefirst']['index'];?>
&orderby=<?php echo $_smarty_tpl->tpl_vars['ref']->value['orderby'];?>
&direction=<?php echo $_smarty_tpl->tpl_vars['ref']->value['direction'];?>
&onpagelimit=<?php echo $_smarty_tpl->tpl_vars['ref']->value['onpagelimit'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pagefirst']['index'];?>
&nbsp</a>
                    <?php endfor; endif; ?>
                </span>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['name'] = 'pagefirstnext';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['start'] = (int)$_smarty_tpl->tpl_vars['ref']->value['page']-3;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ref']->value['page']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirstnext']['total']);
?>
                    <a href="?action=list&page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pagefirstnext']['index'];?>
&orderby=<?php echo $_smarty_tpl->tpl_vars['ref']->value['orderby'];?>
&direction=<?php echo $_smarty_tpl->tpl_vars['ref']->value['direction'];?>
&onpagelimit=<?php echo $_smarty_tpl->tpl_vars['ref']->value['onpagelimit'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pagefirstnext']['index'];?>
&nbsp</a>
                <?php endfor; endif; ?>
            <?php }else{ ?>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['name'] = 'pagefirst';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ref']->value['page']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pagefirst']['total']);
?>
                    <a href="?action=list&page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pagefirst']['index'];?>
&orderby=<?php echo $_smarty_tpl->tpl_vars['ref']->value['orderby'];?>
&direction=<?php echo $_smarty_tpl->tpl_vars['ref']->value['direction'];?>
&onpagelimit=<?php echo $_smarty_tpl->tpl_vars['ref']->value['onpagelimit'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pagefirst']['index'];?>
&nbsp</a>
                <?php endfor; endif; ?>
            <?php }?>
            <b>&nbsp<?php echo $_smarty_tpl->tpl_vars['ref']->value['page'];?>
</b>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['name'] = 'pagenext';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['start'] = (int)$_smarty_tpl->tpl_vars['ref']->value['page']+1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ref']->value['pagecount']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pagenext']['total']);
?>
                <a href="?action=list&page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pagenext']['index'];?>
&orderby=<?php echo $_smarty_tpl->tpl_vars['ref']->value['orderby'];?>
&direction=<?php echo $_smarty_tpl->tpl_vars['ref']->value['direction'];?>
&onpagelimit=<?php echo $_smarty_tpl->tpl_vars['ref']->value['onpagelimit'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pagenext']['index'];?>
&nbsp</a>
            <?php endfor; endif; ?>
            <?php if ($_smarty_tpl->tpl_vars['ref']->value['page']!=$_smarty_tpl->tpl_vars['ref']->value['pagecount']){?><a href="?action=list&page=<?php echo $_smarty_tpl->tpl_vars['ref']->value['page']+1;?>
&orderby=<?php echo $_smarty_tpl->tpl_vars['ref']->value['orderby'];?>
&direction=<?php echo $_smarty_tpl->tpl_vars['ref']->value['direction'];?>
&onpagelimit=<?php echo $_smarty_tpl->tpl_vars['ref']->value['onpagelimit'];?>
">Next</a><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ref']->value['page']<$_smarty_tpl->tpl_vars['ref']->value['pagecount']-2){?><a href="?action=list&page=<?php echo $_smarty_tpl->tpl_vars['ref']->value['pagecount'];?>
&orderby=<?php echo $_smarty_tpl->tpl_vars['ref']->value['orderby'];?>
&direction=<?php echo $_smarty_tpl->tpl_vars['ref']->value['direction'];?>
&onpagelimit=<?php echo $_smarty_tpl->tpl_vars['ref']->value['onpagelimit'];?>
">Last</a>
            <?php }?>
            |  <?php echo $_smarty_tpl->tpl_vars['ref']->value['pagecount'];?>
</td>
        <td><select onchange="document.location=this.options[this.selectedIndex].value">
                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ref']->value['def_onpagelimit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                    <option value="?action=list&page=<?php echo $_smarty_tpl->tpl_vars['ref']->value['page'];?>
&orderby=<?php echo $_smarty_tpl->tpl_vars['ref']->value['orderby'];?>
&direction=<?php echo $_smarty_tpl->tpl_vars['ref']->value['direction'];?>
&onpagelimit=<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
"
                            <?php if ($_smarty_tpl->tpl_vars['val']->value==$_smarty_tpl->tpl_vars['ref']->value['onpagelimit']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
                <?php } ?>
            </select></td>
    </tr>
    </tbody>

</table><?php }} ?>