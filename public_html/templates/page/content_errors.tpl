{* Smarty *}
{if isset($loginisset)}
    <p>User with name {$loginisset} already exist. Choose another name and try again.</p>
{elseif isset($emailisset)}
    <p>E-mail {$emailisset} is already in use. Choose another one and try again.</p>
{elseif isset($register_error)}
    <p>{$register_error}</p>
{elseif isset($loginwrong)}
    <p>{$loginwrong}</p>
{elseif isset($pwdwrong)}
    <p>{$pwdwrong}</p>
{else}
    <p>Where are you, man?</p>
{/if}
<input type="button" value="Back" onclick="history.back()"/>