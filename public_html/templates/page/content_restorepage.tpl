{* Smarty *}
{if isset($restoredlogin)}
    <p>Your login is - {$restoredlogin}</p>
    <p>If You forget your password, click <a href="?action=remind_pwd">HERE</a></p>
{/if}
{if isset($restorepwd)}
    <p>Link to password reset page was sent to e-mail, used in registration</p>
    <p>NOTE! This link will be available 24 hours!</p>
    <p>Link to reset is <a href="{$resetlink}">HERE</a></p>
{/if}
{if isset($resetflink)}
    <p>Your password has been changed!</p>
    <p>You can return to <a href=".">main page</a> and sign in with new password</p>
{/if}
{if isset($resetflogged)}
    <p>Congratulation, {$username}! You change your password right now!</p>
    <p>You can <a href="?action=logout">logout</a> and sign in with new password</p>
{/if}