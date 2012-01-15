<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{$siteConfig->siteName}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="./styles/styles.css" rel="stylesheet">
    <script type="text/javascript" src="./libs/js/url.js"></script>

</head>
<body>
<div class="container">
    <div class="content">
        <div class="page-header">
            <h1>{$siteConfig->siteName}</h1>
        </div>
        <div class="page-top-menu">
            <h1><small><a href="./">Главная страница</a></small></h1>
        </div>
        <div class="row">
            <div class="span10">
            {block name='content'}{/block}
            </div>
            <div class="span4">
                {block name='add'}
                <h3>Добавить статью</h3>
                <form action="" method="POST">
                    <div class="clearfix">
                    <input placeholder="Ваше имя" required="true" type="text" name="user_name" />
                    </div>
                    <div class="clearfix">
                    <input placeholder="Название статьи" required="true" type="text" name="title" />
                    </div>
                    <div class="clearfix">
                    <textarea placeholder="Текст" required="true" name="text" cols="60" rows="7"></textarea>
                    </div>
                    <input class="btn primary" type="submit" value="Добавить">
                </form>
                {/block}
            </div>
        </div>
    </div>

    <footer>
    <p>&copy; 2011 <a href="./">{$siteConfig->siteName}</p>
    </footer>

</div>

</body>
</html>
