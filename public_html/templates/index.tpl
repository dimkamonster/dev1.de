{* Smarty *}
<html>
{include file='page/Header.tpl'}
{include file='page/Nav_menu.tpl'}
{include file='page/Content.tpl'}
{include file='page/Footer.tpl'}
</html>
{*<html>*}
{*<head>*}
    {*<title>{$title}</title>*}
{*</head>*}
{*<meta charset="utf-8">*}
{*<FRAMESET rows="10%,80%, *" FRAMEBORDER = "YES" BORDER = 1>*}
    {*<FRAME src = "templates/Header.php" NORESIZE>*}
    {*<FRAMESET cols="20%, *">*}
        {*{if $username == 'none'}*}
            {*<FRAME src="templates/login.html" NORESIZE>*}
        {*{else}*}
        {*<FRAME src="templates/Nav_menu.php" NORESIZE>*}
        {*{/if}*}
        {*<FRAME src="templates/Content.php" NORESIZE>*}
    {*</FRAMESET>*}
    {*<FRAMESET cols="*">*}
        {*<FRAME src="templates/Bottom.php" NORESIZE>*}
    {*</FRAMESET>*}

    {*<NOFRAMES>*}
        {*<P>This frameset document contains:*}
        {*<UL>*}
            {*<LI><A href="contents_of_frame1.html">Some neat contents</A>*}
            {*<LI><IMG src="contents_of_frame2.gif" alt="A neat image">*}
            {*<LI><A href="contents_of_frame3.html">Some other neat contents</A>*}
        {*</UL>*}
    {*</NOFRAMES>*}
{*</FRAMESET>*}


{*{if $name != ""}*}
    {*<h1 align = " center">Welcome to our Site, {$smarty_name}!</h1>*}
    {*{else} <h1 align = "center">Welcome to our Site!</h1>*}
    {*<h3 align = "left">You are not logged in.</h3><br>*}

    {*Please enter You login and password:*}
{*    <form action="registration_action.php" method="POST">*}
    {*<form action="index.php" method="POST">*}
        {*Login: <input type="text" name="login" />*<br /><br />*}
        {*Password: <input type="password" name="pword[]" />*<br /><br />*}
        {*<input type="submit" value="Login" />*}
    {*</form>*}
    {*Fogot your password?<br><br>*}
    {*If You are not registered, click here to register .*}
{*{/if}*}

{*</html>*}
