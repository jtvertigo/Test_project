<?php /* Smarty version Smarty 3.1.4, created on 2012-01-12 22:58:29
         compiled from "/opt/lampp/htdocs/sites/test.local/views/adm/indexadmininfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16575894454f0f5785de87a9-96196166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96ea758b2a49a1dbb551236cefb2b40d4b7e573e' => 
    array (
      0 => '/opt/lampp/htdocs/sites/test.local/views/adm/indexadmininfo.tpl',
      1 => 1326401209,
      2 => 'file',
    ),
    'b08bacbff7990588380b8f34edce27045b12238f' => 
    array (
      0 => '/opt/lampp/htdocs/sites/test.local/views/adm/content.tpl',
      1 => 1326404754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16575894454f0f5785de87a9-96196166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f0f5785ec70c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0f5785ec70c')) {function content_4f0f5785ec70c($_smarty_tpl) {?><!DOCTYPE html>
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