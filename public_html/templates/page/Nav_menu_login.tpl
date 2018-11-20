<form action="index.php" method="POST">
    <input name="action" type="hidden" id="log" value="do_login">
    Login:<br />
    {if $smarty.get.action == "register"
        OR $smarty.get.action == "remind_login"
            OR $smarty.get.action == "remind_pwd"}
        <input type="text" name="login"/><br />
    {else}
    <input type="text" name="login" autofocus/><br />
    {/if}
    <p style="font-size:8pt"><a href="?action=remind_login">Forget Login?</a></p>
    {*<br />*}
    Password:<br />
    <input type="password" name="pword" /><br />
    <p style="font-size:8pt"><a href="?action=remind_pwd">Forget Password?</a></p>
    {*<br />*}
    <input type="submit" value="Sign In" />
    <input type="reset" value="Reset form">
</form>
{*<br />*}
<p><a href="?action=register">Register</a></p>