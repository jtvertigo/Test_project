<?php /* Smarty version Smarty 3.1.4, created on 2012-01-13 21:27:51
         compiled from "/home/vertigo2/projects/test.local/views/adm/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:564611004f1093c73b6814-42623039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e66007abf04660e615c56978d7a6cb3aef38ef2' => 
    array (
      0 => '/home/vertigo2/projects/test.local/views/adm/login.tpl',
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
  'nocache_hash' => '564611004f1093c73b6814-42623039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f1093c74bf14',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f1093c74bf14')) {function content_4f1093c74bf14($_smarty_tpl) {?><!DOCTYPE html>
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