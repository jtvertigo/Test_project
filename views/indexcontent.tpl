{extends file='pagebody.tpl'}
{block name='content'}
    {if $articles}
    {foreach $articles as $article}
        {if $article.public eq 1}
        <h4><a href="./?article={$article.id}">{$article.title}</a><br /></h4>
        Автор: {$article.user_name}<br />
		{$article.text|truncate:'350'}<hr />
        {/if}
    {/foreach}
    {else}
        <h3>Нет статей для просмотра</h3>
    {/if}
{/block}
