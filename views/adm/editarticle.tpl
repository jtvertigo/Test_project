{extends file='content.tpl'}
{block name='content'}

<form method="post">
<fieldset>
    <legend>Редактирование статьи</legend>
    <input type="hidden" name="id" value="{$smarty.get.manage}" />
    <div class="clearfix">
        <label for="public">Опубликована?</label>
        <div class="input">
            <select name="public">
                {if $article.public eq 0 }
                <option value="0">Нет</option>
                <option value="1">Да</option>
                {else}
                <option value="1">Да</option>
                <option value="0">Нет</option>
                {/if}
            </select>
        </div>
    </div>
    <div class="clearfix">
        <label for="name">Название: </label>
        <div class="input">
            <input required="true" type="text" name="title" value="{$article.title}" />
        </div>
    </div>
    <div class="clearfix">
        <label for="user_name">Автор: </label>
        <div class="input">
            <input required="true" type="text" name="user_name" value="{$article.user_name}" />
        </div>
    </div>
    <div class="clearfix">
        <label for="text">Текст: </label>
        <div class="input">
            <textarea style="width: 509px; height: 205px;" required="true" name="text" cols="77" rows="8">{$article.text}</textarea><br />
        </div>
    </div>
    <div class="actions">
        <input class="btn primary" type="submit" value="Внести изменения">
        <a class="btn" href="./admin.php?manage">Отмена</a>
    </div>
</fieldset>
</form>

{/block}
