{* Smarty *}
{if isset($smarty.session.admin) && $smarty.session.admin == '1'}
    {include file = "page/content_listout_admin.tpl"}
{else}
    {include file = "page/content_listout_user.tpl"}
{/if}
