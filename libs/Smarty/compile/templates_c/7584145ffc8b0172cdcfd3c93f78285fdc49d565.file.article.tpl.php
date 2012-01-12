<?php /* Smarty version Smarty 3.1.4, created on 2012-01-12 22:58:20
         compiled from "/opt/lampp/htdocs/sites/test.local/views/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3299774004f0f577c6b18e4-94580276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7584145ffc8b0172cdcfd3c93f78285fdc49d565' => 
    array (
      0 => '/opt/lampp/htdocs/sites/test.local/views/article.tpl',
      1 => 1326404578,
      2 => 'file',
    ),
    '3b7bb45583844a2d69229b11568142c6317a18bd' => 
    array (
      0 => '/opt/lampp/htdocs/sites/test.local/views/pagebody.tpl',
      1 => 1326404893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3299774004f0f577c6b18e4-94580276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f0f577c750df',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0f577c750df')) {function content_4f0f577c750df($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['siteConfig']->value->siteName;?>
</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="./styles/styles.css" rel="stylesheet">
    <script type="text/javascript" src="./libs/js/url.js"></script>

</head>
<body>
<div class="container">
    <div class="content">
        <div class="page-header">
            <h1><?php echo $_smarty_tpl->tpl_vars['siteConfig']->value->siteName;?>
</h1>
        </div>
        <div class="page-top-menu">
            <h1><small><a href="./">Главная страница</a></small></h1>
        </div>
        <div class="row">
            <div class="span10">
            
<h2><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2>
Автор: <?php echo $_smarty_tpl->tpl_vars['article']->value['user_name'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['article']->value['text'];?>


<br /><br />
<script type="text/javascript" src="<?php echo @SITE_URL;?>
/libs/js/social.js"></script>
<script type="text/javascript">social(getBaseURL())</script>

            </div>
            <div class="span4">
                
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
                
            </div>
        </div>
    </div>

    <footer>
    <p>&copy; 2011 <a href="./"><?php echo $_smarty_tpl->tpl_vars['siteConfig']->value->siteName;?>
</p>
    </footer>

</div>

</body>
</html>
<?php }} ?>