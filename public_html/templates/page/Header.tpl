{* Smarty *}
<html>
<head>
    <meta charset="utf-8">
    <title>{$title}</title>
</head>

<body>
<table border=0 cellspacing=0 cellpadding=10 width=100% height=100%>
    <tr>
        <td width=100% colspan=2 valign=top height=10% style='border:none;border-bottom:solid windowtext 1.0pt;'>
            <h3><a href="/.">Hello,
                {if $username=='nope123nope!@'}
                UNREGISTERED user!
            {else}
                {$username}!
            {/if}
            </a></h3>
            {if isset($smarty.session.admin) && $smarty.session.admin == '1'}
                <p style="font-size: 9pt">You have admin rights</p>
            {/if}
            {if $username != 'nope123nope!@'}
                {if $smarty.get.action == 'list'}
                    Table of users below
                {/if}
            {/if}
        </td>
    </tr>