{* Smarty *}
{*This is for paginator to show shot numb of pagers, do sometime. Fist part is working, but last part - nope*}
<td>{if $ref.page>=4}<a href="?action=list&page=1&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">First&nbsp</a>{/if}
    {if $ref.page!=1}<a href="?action=list&page={$ref.page-1}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">Prev</a>{/if}
    {if $ref.page>=6}
        <a href="?action=list&page=1&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">1&nbsp</a>
        <a href='javascript:;' onclick=showPrevPages()>...</a>
        <span id=prevpage style='display: none'>
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
    {*not working below*}
    {if $ref.page+5<=$ref.pagecount}
        {section name=pagelast start=($ref.page+1) loop=$ref.page+5}
            <a href="?action=list&page={$smarty.section.pagelast.index}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">{$smarty.section.pagelast.index}&nbsp</a>
        {/section}
        <a href='javascript:;' onclick=showNextPages()>...</a>
        <span id=nextpage style='display: none'>
                    {section name=pagelastnext start=$ref.page+5 loop=$ref.pagecount}
                        <a href="?action=list&page={$smarty.section.pagelastnext.index}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">{$smarty.section.pagelastnext.index}&nbsp</a>
                    {/section}
                </span>
        <a href="?action=list&page={$ref.pagecount}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">{$ref.pagecount}&nbsp</a>
    {else}
        {section name=pagenext start=$ref.page+1 loop=$ref.pagecount+1}
            <a href="?action=list&page={$smarty.section.pagenext.index}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">{$smarty.section.pagenext.index}&nbsp</a>
        {/section}
    {/if}
    {if $ref.page!=$ref.pagecount}<a href="?action=list&page={$ref.page+1}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">Next</a>{/if}
    {if $ref.page<$ref.pagecount-2}<a href="?action=list&page={$ref.pagecount}&orderby={$ref.orderby}&direction={$ref.direction}&onpagelimit={$ref.onpagelimit}">Last</a>
    {/if}
    |  {$ref.pagecount}</td>