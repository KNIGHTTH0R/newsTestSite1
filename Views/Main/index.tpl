{extends file="../layout.tpl"}
{block name=body}
<h1>{$users}</h1>
       {* <pre>{print_r($news,true)}</pre>*}
    <div id="slider">
        <div id="polosa">
            {foreach $slider as $slide}
            <img src="/../../web/img/{$slide['img']}" alt="{$slide['name']}" title="{$slide['name']}">
            {/foreach}
        </div>
    </div>
    <button id="left">Left</button>
    <button id="right">Right</button>

    <script src="/../../web/js/script.js"></script>





    {foreach $cats as $cat}
    <h1><a href="/category/show/{$cat['id']}">{$cat['name']}</a></h1>

    <ul>
     {foreach $news as $key => $value}
    {if $cat['id']==$key}
        {foreach $value as $key1=> $value1}
         <li><a href="/news/show/{$value1['id']}">{$value1['name']}</a> </li>
        {/foreach}
    {/if}

         {/foreach}







    </ul>
{/foreach}

{/block}