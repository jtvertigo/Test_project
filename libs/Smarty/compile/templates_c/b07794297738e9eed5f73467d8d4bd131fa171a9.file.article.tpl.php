<?php /* Smarty version Smarty 3.1.4, created on 2012-01-15 14:32:21
         compiled from "/home/vertigo2/projects/test.local/views/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11023830484f1161152d3da2-74842850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b07794297738e9eed5f73467d8d4bd131fa171a9' => 
    array (
      0 => '/home/vertigo2/projects/test.local/views/article.tpl',
      1 => 1326634233,
      2 => 'file',
    ),
    'dc374e6a781a962ce10a2498183e636df1e4fa7d' => 
    array (
      0 => '/home/vertigo2/projects/test.local/views/pagebody.tpl',
      1 => 1326407729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11023830484f1161152d3da2-74842850',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f1161154e154',
  'variables' => 
  array (
    'siteConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f1161154e154')) {function content_4f1161154e154($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="./libs/js/social.js"></script>
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