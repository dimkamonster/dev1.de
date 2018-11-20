{* Smarty *}
<tr>
    <td width=20% valign=top style='border:none;border-right:solid windowtext 1.0pt;'>
        {if $username == 'nope123nope!@'}
            {include file='page/Nav_menu_login.tpl'}
        {else}
            {include file='page/Nav_menu_registered.tpl'}
        {/if}

        {*<p>Navigation</p>*}
    </td>
