{extends file='content.tpl'}
{block name='content'}
<h2 id="adm">Панель администратора</h2>
    <strong>URL сайта: </strong>{$smarty.const.SITE_URL}<br />
    <strong>Имя сайта: </strong>{$siteConfig->siteName}<br />
{/block}
