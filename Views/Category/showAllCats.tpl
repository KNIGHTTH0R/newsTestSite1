{extends file='../layout.tpl'}
{block name=body}


    <ul class="list-group">



{*<pre>{print_r($res)}</pre>*}
{foreach $res as $item}
    <li class="list-group-item"><a href="/category/show/{$item['id']}/1">{$item['name']}</a></li>
{/foreach}
    </ul>
{/block}