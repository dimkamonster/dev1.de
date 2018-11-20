<h1>Enter registration data:</h1>
<form action="index.php" method="POST">
    <input name="action" type="hidden" id="reg" value="do_register">
    Login: <input type="text" name="login" autofocus/>*<br /><br />
    Email: <input type="text" name="email" />*<br /><br />
    Password: <input type="password" name="pword[]" />*<br /><br />
    Repeat Password: <input type="password" name="pword[]"/>*<br /><br />
    All Fields with * are necessary<br /><br />
    <input type="submit" value="GO" />
    <input type="reset" value="Reset form">
</form>