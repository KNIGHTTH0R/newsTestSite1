{extends file="../layout.tpl"}
{block name=body}
    <h1>{$users}</h1>

    {foreach $getNews as $new}
        <h2><a href="/news/show/{$new['id']}">{$new['name']}</a></h2>
        <img src="/../web/img/{$new['img']}" alt="{$new['name']}">
        <p>{$new['description']}</p>
        <p>{$new['author']}</p>
        <hr size="30">
        {/foreach}
        <ul>
            {if $lastPag>3}
            {if $currentPage==1 }
                <li><a href="/category/show/{$params2}/{$currentPage}">{$currentPage}</a></li>
                <li><a href="/category/show/{$params2}/{$currentPage+1}">{$currentPage+1}</a></li>
                <li><a href="/category/show/{$params2}/{$currentPage+2}">{$currentPage+2}</a></li>
                <li><a href="/category/show/{$params2}/{$currentPage+3}">{$currentPage+3}</a></li>

                <li><a href="/category/show/{$params2}/{$currentPage+2}" id="test1""> ... </a></li>
                <li><a href="/category/show/{$params2}/{$currentPage+1}"> > </a></li>
                <li><a href="/category/show/{$params2}/{$lastPag}"> >>  </a></li>
            {elseif $currentPage==2}
                <li><a href="/category/show/{$params2}/{$currentPage-1}">{$currentPage-1}</a></li>
                <li><a href="/category/show/{$params2}/{$currentPage}">{$currentPage}</a></li>
                <li><a href="/category/show/{$params2}/{$currentPage+1}">{$currentPage+1}</a></li>
                <li><a href="/category/show/{$params2}/{$currentPage+2}">{$currentPage+2}</a></li>
                <li><a href="/category/show/{$params2}/{$currentPage+2}"> ... </a></li>
                <li><a href="/category/show/{$params2}/{$currentPage+1}"> > </a></li>
                <li><a href="/category/show/{$params2}/{$lastPag}"> >>  </a></li>
                {else}
                <li><a href="/category/show/{$params2}/1"> << </a></li>
                <li><a href="/category/show/{$params2}/{$currentPage-1}"> < </a></li>
                <li><a href="/category/show/{$params2}/{$currentPage-1}">{$currentPage-1}</a></li>
                <li><a href="/category/show/{$params2}/{$currentPage}">{$currentPage}</a></li>
                <li><a href="/category/show/{$params2}/{$currentPage+1}">{$currentPage+1}</a></li>
                <li><a href="/category/show/{$params2}/{$currentPage+2}"> ... </a></li>
                <li><a href="/category/show/{$params2}/{$currentPage+1}"> > </a></li>
                <li><a href="/category/show/{$params2}/{$lastPag}"> {$lastPag}  </a></li>
                <li><a href="/category/show/{$params2}/{$lastPag}"> >>  </a></li>
            {/if}
            {/if}
        </ul>
    {foreach $getNews as $new}
        {/foreach}




{/block}