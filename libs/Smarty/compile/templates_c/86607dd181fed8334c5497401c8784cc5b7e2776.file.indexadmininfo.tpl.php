<?php /* Smarty version Smarty 3.1.4, created on 2012-01-13 21:28:17
         compiled from "/home/vertigo2/projects/test.local/views/adm/indexadmininfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10748985314f1093e17ba858-05732484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86607dd181fed8334c5497401c8784cc5b7e2776' => 
    array (
      0 => '/home/vertigo2/projects/test.local/views/adm/indexadmininfo.tpl',
      1 => 1326407729,
      2 => 'file',
    ),
    'c4eea3f26d6afb87c28d5f47de4ffb6aec2cf216' => 
    array (
      0 => '/home/vertigo2/projects/test.local/views/adm/content.tpl',
      1 => 1326407729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10748985314f1093e17ba858-05732484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f1093e18776a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f1093e18776a')) {function content_4f1093e18776a($_smarty_tpl) {?><!DOCTYPE html>
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
    <style type="text/css">
      .container { width: 700px; }
    </style>

</head>
<body>
<div class="container">
    <div class="content">
        <div class="page-header">
          <h1><?php echo $_smarty_tpl->tpl_vars['siteConfig']->value->siteName;?>
 <small>Панель администратора</small></h1>
        </div>
        <div class="page-top-menu">
            <h1><small><a href="./admin.php">Главная страница</a> |
                       <a href="./admin.php?manage">Управление контентом</a> | 
                       <a href="./">Страница проекта</a> | 
                       <a href="./admin.php?logout">Выйти</a></small></h1>
            </div>
        <div class="row">
            <div class="span12">
                
<h2 id="adm">Панель администратора</h2>
    <strong>URL сайта: </strong><?php echo @SITE_URL;?>
<br />
    <strong>Имя сайта: </strong><?php echo $_smarty_tpl->tpl_vars['siteConfig']->value->siteName;?>
<br />

            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2011 <a href="./"><?php echo $_smarty_tpl->tpl_vars['siteConfig']->value->siteName;?>
</a></p>
    </footer>
</div>
</body>
</html>
<?php }} ?>