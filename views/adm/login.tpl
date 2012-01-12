{extends file='content.tpl'}
{block name='content'}

<form method="post">
<fieldset>
    <legend>Для входа, пожалуйста, введите <em>логин</em> и <em>пароль</em></legend>
    <div class="clearfix">
        <label for="login">Логин: </label>
        <div class="input">
            <input required="true" type="text" name="login" />
        </div>
    </div>
    <div class="clearfix">
        <label for="password">Пароль: </label>
        <div class="input">
            <input required="true" type="password" name="password" />
        </div>
    </div>
    <div class="actions">
        <input class="btn primary" name="send_logon" type="submit" value="Войти">
    </div>
</fieldset>
</form>

{/block}
