<?php /* Smarty version Smarty 3.1.4, created on 2012-01-12 23:22:39
         compiled from "/opt/lampp/htdocs/sites/test.local/views/adm/editarticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286960294f0f5d2fc29bf2-99426043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11f853271eae1f5edd2dcd4811ae135bf419d742' => 
    array (
      0 => '/opt/lampp/htdocs/sites/test.local/views/adm/editarticle.tpl',
      1 => 1326404780,
      2 => 'file',
    ),
    'b08bacbff7990588380b8f34edce27045b12238f' => 
    array (
      0 => '/opt/lampp/htdocs/sites/test.local/views/adm/content.tpl',
      1 => 1326404754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286960294f0f5d2fc29bf2-99426043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f0f5d2fd924c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0f5d2fd924c')) {function content_4f0f5d2fd924c($_smarty_tpl) {?><!DOCTYPE html>
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
    <legend>Редактирование статьи</legend>
    <input type="hidden" name="id" value="<?php echo $_GET['manage'];?>
" />
    <div class="clearfix">
        <label for="public">Опубликована?</label>
        <div class="input">
            <select name="public">
                <?php if ($_smarty_tpl->tpl_vars['article']->value['public']==0){?>
                <option value="0">Нет</option>
                <option value="1">Да</option>
                <?php }else{ ?>
                <option value="1">Да</option>
                <option value="0">Нет</option>
                <?php }?>
            </select>
        </div>
    </div>
    <div class="clearfix">
        <label for="name">Название: </label>
        <div class="input">
            <input required="true" type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" />
        </div>
    </div>
    <div class="clearfix">
        <label for="user_name">Автор: </label>
        <div class="input">
            <input required="true" type="text" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_name'];?>
" />
        </div>
    </div>
    <div class="clearfix">
        <label for="text">Текст: </label>
        <div class="input">
            <textarea style="width: 509px; height: 205px;" required="true" name="text" cols="77" rows="8"><?php echo $_smarty_tpl->tpl_vars['article']->value['text'];?>
</textarea><br />
        </div>
    </div>
    <div class="actions">
        <input class="btn primary" type="submit" value="Внести изменения">
        <a class="btn" href="./admin.php?manage">Отмена</a>
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