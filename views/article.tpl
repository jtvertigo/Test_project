{extends file='pagebody.tpl'}
{block name='content'}
<h2>{$article.title}</h2>
Автор: {$article.user_name}<br />
{$article.text}

<br /><br />
<script type="text/javascript" src="{$smarty.const.SITE_URL}/libs/js/social.js"></script>
<script type="text/javascript">social(getBaseURL())</script>
{/block}
