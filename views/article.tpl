{extends file='pagebody.tpl'}
{block name='content'}
{if $article}
    <h2>{$article.title}</h2>
    Автор: {$article.user_name}<br />
    {$article.text}
{else}
    <h2>Статья не найдена...</h2>
{/if}

<br /><br />
<script type="text/javascript" src="./libs/js/social.js"></script>
<script type="text/javascript">social(getBaseURL())</script>
{/block}
