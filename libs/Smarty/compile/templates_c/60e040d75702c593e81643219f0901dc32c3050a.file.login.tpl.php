<?php /* Smarty version Smarty 3.1.4, created on 2012-01-12 22:58:18
         compiled from "/opt/lampp/htdocs/sites/test.local/views/adm/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19606339024f0f577a19af00-79183305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60e040d75702c593e81643219f0901dc32c3050a' => 
    array (
      0 => '/opt/lampp/htdocs/sites/test.local/views/adm/login.tpl',
      1 => 1326404419,
      2 => 'file',
    ),
    'b08bacbff7990588380b8f34edce27045b12238f' => 
    array (
      0 => '/opt/lampp/htdocs/sites/test.local/views/adm/content.tpl',
      1 => 1326404754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19606339024f0f577a19af00-79183305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f0f577a257da',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0f577a257da')) {function content_4f0f577a257da($_smarty_tpl) {?><!DOCTYPE html>
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