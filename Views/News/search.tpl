{extends file="../layout.tpl"}
{block name=body}
{if $res!==false}


        {foreach $res as $post}

            <div class="card mb-3">
                <img class="card-img-top" src="../../web/img/{$post['img']}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{$post['name']}</h4>
                    <p class="card-text">
                        {$post['description']}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

        {/foreach}
{else}
    <h1>Posts with that tag not found now </h1>

{/if}


{/block}