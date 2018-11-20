{* Smarty *}
<td width=70% valign=top style='border:none;'>
    {if $username == 'nope123nope!@'}
        {if $smarty.get.action == 'registered'}
            {include file='page/content_user_added.tpl'}
        {elseif $smarty.get.action == 'register'}
            {include file='page/content_registration.tpl'}
        {elseif $smarty.get.action == 'err'}
            {include file='page/content_errors.tpl'}
        {elseif $smarty.get.action == 'remind_pwd'}
            {include file='page/content_restore_password.tpl'}
        {elseif $smarty.get.action == 'remind_login'}
            {include file='page/content_restore_login.tpl'}
        {elseif $smarty.get.action == 'restorepage'}
            {include file='page/content_restorepage.tpl'}
        {elseif $smarty.get.action == 'reset'}
            {include file='page/content_reset_pwd_page.tpl'}
        {*{elseif $smarty.get.action == ''}*}
        {else}
            {include file='page/content_unregistered.tpl'}{*<p>Sorry, nothing to show</p>*}
        {/if}
    {elseif $smarty.get.action == 'list'}
        {include file='page/content_listout.tpl'}
    {elseif $smarty.get.action == 'change'}
        {include file='page/content_reset_pwd_page.tpl'}
    {elseif $smarty.get.action == 'restorepage'}
        {include file='page/content_restorepage.tpl'}
    {/if}
</td>
</tr>
<tr>