{extends file='content.tpl'}
{block name='content'}

    {foreach $articles as $article name="unpublic"}
        {if $smarty.foreach.unpublic.first}
            <h2>Неопубликованные статьи</h2>
        {/if}
        {if $article.public == '0'}
        <div class="well" style="padding: 14px 19px;">
        <h4><a href="./admin.php?manage={$article.id}">{$article.title}</a></h4> Автор: {$article.user_name}<br />
		{$article.text|truncate:'350'}
        <div class="row">
            <div class="span6 offset6">
                <a class="btn success" href="./admin.php?accept={$article.id}">Одобрить</a>
                <a class="btn" href="./admin.php?manage={$article.id}">Редактировать</a>
                <a class="btn danger" href="./admin.php?delete={$article.id}">Удалить</a>
            </div>
        </div>
        </div>
        {/if}
    {/foreach}

    <hr />

    {foreach $articles as $article name="public"}
        {if $smarty.foreach.public.first}
            <h2>Опубликованные статьи</h2>
        {/if}
        {if $article.public == '1'}
        <div class="well" style="padding: 14px 19px;">
        <h4><a href="./admin.php?manage={$article.id}">{$article.title}</a></h4> Автор: {$article.user_name}<br />
		{$article.text|truncate:'350'}
        <div class="row">
            <div class="span6 offset6">
                <a class="btn info" href="./admin.php?disagree={$article.id}">Отклонить</a>
                <a class="btn" href="./admin.php?manage={$article.id}">Редактировать</a>
                <a class="btn danger" href="./admin.php?delete={$article.id}">Удалить</a>
            </div>
        </div>
        </div>
        {/if}
    {/foreach}

{/block}
