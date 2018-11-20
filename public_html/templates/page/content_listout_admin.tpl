{* Smarty *}
<script>function showPrevPages()
    {
        var myDiv = document.getElementById("prevpage");
        if(myDiv.style.display == "none")
        {
            myDiv.style.display = "block";
        } else {
            myDiv.style.display = "none";
        }
        return false;
    }</script>
{*<strong><small><a href='javascript:;' onclick=showTooltipadmin()> Администраторы раздела </a></small></strong>

<div id=tooltipadmin style='display: none'>

    <SMALL><BR>Зозуля Дмитрий тел.: (3812) 51-44-03,&nbsp;742-403 (ведомственный)

        <BR>Пушкарев Алексей тел.: (3812) 51-48-75,&nbsp;742-275 (ведомственный)</SMALL></div></td></tr></table>
*}
<form action="index.php" method="POST">
    <input name="to_add" type="hidden" id="to_add" value="from_listout">
    <table border="0" cellspacing=0 cellpadding=3>
        <thead>
        <caption>List of users for admin</caption>
        <tr>
            <th style='border:none;border-top:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-left:solid windowtext 1.0pt;'>&nbsp</th>
            <th style='border:none;border-top:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
                <a href="?action=list{$ref.login}">Login</a>
                {if $ref.orderby == "login"}
                    {if $ref.direction == "0"}&#8593;{else}&#8595;
                    {/if}{/if}</th>
            <th style='border:none;border-top:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
                <a href="?action=list{$ref.email}">E-mail adress</a>
                {if $ref.orderby == "email"}
                    {if $ref.direction == "0"}&#8593;{else}&#8595;
                    {/if}{/if}</th>
            <th style='border:none;border-top:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
                <a href="?action=list{$ref.date}">Creation date and time</a>
                {if $ref.orderby == "date"}
                    {if $ref.direction == "0"}&#8593;{else}&#8595;
                    {/if}{/if}</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$table item = str}
            <tr>
                <td style='border:none;border-bottom:solid windowtext 1.0pt;border-left:solid windowtext 1.0pt;'>
                    <input type="checkbox" name="check[]" value="{$str.login}">&nbsp</td>
                <td style='border:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
                    {$str.login}</td>
                <td style='border:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
                    {$str.email}</td>
                <td style='border:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
                    {$str.create_date}</td>
                <td>&nbsp<a href="?action=edit&record={$str.login}">Edit</a></td>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="?action=delete&record={$str.login}">Delete</a></td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    <br />
    <input type="submit" name = "add" value="Add new user" />
    <input type="submit" name = "del" value="Delete selected" onClick="confirm('Это сообщение!')" />
    <input type="reset" value="Reset form">
</form>
<br />
<table border="0"> {**}
    <thead>
    <caption>Page navigation</caption>
    <tr>
        <th width = "70%"></th>
        <th>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            {if $ref.page>=4}<a href="?action=list&page=1&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">First&nbsp</a>{/if}
            {if $ref.page!=1}<a href="?action=list&page={$ref.page-1}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">Prev</a>{/if}
            {if $ref.page>=6}
                <a href="?action=list&page=1&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">1&nbsp</a>
                <a href="javascript:;" onclick=showPrevPages()>...</a>
                <span id=prevpage style="display: none">
                    {section name=pagefirst start=2 loop=$ref.page-3}
                        <a href="?action=list&page={$smarty.section.pagefirst.index}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">{$smarty.section.pagefirst.index}&nbsp</a>
                    {/section}
                </span>
                {section name=pagefirstnext start=$ref.page-3 loop=$ref.page}
                    <a href="?action=list&page={$smarty.section.pagefirstnext.index}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">{$smarty.section.pagefirstnext.index}&nbsp</a>
                {/section}
            {else}
                {section name=pagefirst start=1 loop=$ref.page}
                    <a href="?action=list&page={$smarty.section.pagefirst.index}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">{$smarty.section.pagefirst.index}&nbsp</a>
                {/section}
            {/if}
            <b>&nbsp{$ref.page}</b>
            {section name=pagenext start=$ref.page+1 loop=$ref.pagecount+1}
                <a href="?action=list&page={$smarty.section.pagenext.index}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">{$smarty.section.pagenext.index}&nbsp</a>
            {/section}
            {if $ref.page!=$ref.pagecount}<a href="?action=list&page={$ref.page+1}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">Next</a>{/if}
            {if $ref.page<$ref.pagecount-2}<a href="?action=list&page={$ref.pagecount}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">Last</a>
            {/if}
            |  {$ref.pagecount}</td>
        <td><select onchange="document.location=this.options[this.selectedIndex].value">
                {foreach from=$ref.def_onpagelimit item=val}
                    <option value="?action=list&page={$ref.page}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$val}"
                            {if $val == $ref.onpagelimit}selected{/if}>{$val}</option>
                {/foreach}
            </select></td>
    </tr>
    </tbody>

</table>