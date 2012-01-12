<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{$siteConfig->siteName}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="./styles/styles.css" rel="stylesheet">
    <style type="text/css">
      .container { width: 700px; }
    </style>

</head>
<body>
<div class="container">
    <div class="content">
        <div class="page-header">
          <h1>{$siteConfig->siteName} <small>Панель администратора</small></h1>
        </div>
        <div class="page-top-menu">
            <h1><small><a href="./admin.php">Главная страница</a> |
                       <a href="./admin.php?manage">Управление контентом</a> | 
                       <a href="./">Страница проекта</a> | 
                       <a href="./admin.php?logout">Выйти</a></small></h1>
            </div>
        <div class="row">
            <div class="span12">
                {block name='content'}{/block}
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2011 <a href="./">{$siteConfig->siteName}</a></p>
    </footer>
</div>
</body>
</html>
