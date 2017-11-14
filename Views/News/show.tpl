{extends file='../layout.tpl'}
{block name=body}
    <pre>{print_r($newMsg)}</pre>
    {if $newMsg !==false}
    {foreach $newMsg as $msg}
    <h1 align="center">{$msg['name']}</h1>
    <img src="/../web/img/{$msg['img']}" alt="{$msg['name']}">
    <h2>{$msg['author']}</h2>
    <p>{$msg['description']}</p>
    <p>{$msg['time_create']}</p>
        {if !isset($smarty.session.user)}

            <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right"
                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                Popover on right
            </button><br>
        {else}
            <button  style="font-size: 70px;color: red"  id="ReadMore" >Read analytics </button><br>
            <div class="ReadOff" id="block1">
                <h1>SOme test text when i don`t have anal text</h1>
            <p >{$msg['full_text']}</p>
            </div>
        {/if}
        {foreach $getTags as $singleTag}
            <a href="/news/search/{$singleTag['tag_id']}">#{$singleTag['tag_name']} </a>
        {/foreach}
        <form action="/news/show/{$msg['id']}" method="post">
            <textarea name="textComment"></textarea>
            <input type="submit">

        </form>

    {/foreach}
        {else}
        <h1>Undefinded News</h1>
    <p>This news was lost, we`re finding it!</p>
    {/if}
    <p>Post was reading {$users} times</p>
    <h3>Now {$onlineNow}</h3>
{/block}