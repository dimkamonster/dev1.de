{* Smarty *}
{if $username == 'nope123nope!@'}
    <p>Reset password for user {$smarty.get.login}</p><br />
{else}
    <p>Reset password for user {$username}</p><br />
{/if}
<form action="index.php" method="POST">
    <input name="action" type="hidden" id="reset" value="do_reset">
    {if $username == 'nope123nope!@'}
        <input name="login" type="hidden" id="lg" value="{$smarty.get.login}">
    {else}
        <input name="login" type="hidden" id="lg" value="{$username}">
    {/if}
    <input name="hash" type="hidden" id="hash" value="{$smarty.get.h}">
    New password: <input type="password" name="pword[]" autofocus/>*<br /><br />
    Repeat new Password: <input type="password" name="pword[]"/>*<br /><br />
    All Fields with * are necessary<br /><br />
    <input type="submit" value="GO" />
    <input type="reset" value="Reset form">
</form>