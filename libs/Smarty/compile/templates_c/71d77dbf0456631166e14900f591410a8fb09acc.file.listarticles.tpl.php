<?php /* Smarty version Smarty 3.1.4, created on 2012-01-13 21:28:18
         compiled from "/home/vertigo2/projects/test.local/views/adm/listarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10750316414f1093e29449e7-45236047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d77dbf0456631166e14900f591410a8fb09acc' => 
    array (
      0 => '/home/vertigo2/projects/test.local/views/adm/listarticles.tpl',
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
  'nocache_hash' => '10750316414f1093e29449e7-45236047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f1093e2ae990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f1093e2ae990')) {function content_4f1093e2ae990($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/vertigo2/projects/test.local/libs/Smarty/plugins/modifier.truncate.php';
?><!DOCTYPE html>
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
                

    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
 $_smarty_tpl->tpl_vars['article']->first = $_smarty_tpl->tpl_vars['article']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["unpublic"]['first'] = $_smarty_tpl->tpl_vars['article']->first;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['unpublic']['first']){?>
            <h2>Неопубликованные статьи</h2>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['article']->value['public']=='0'){?>
        <div class="well" style="padding: 14px 19px;">
        <h4><a href="./admin.php?manage=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h4> Автор: <?php echo $_smarty_tpl->tpl_vars['article']->value['user_name'];?>
<br />
		<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['text'],'350');?>

        <div class="row">
            <div class="span6 offset6">
                <a class="btn success" href="./admin.php?accept=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">Одобрить</a>
                <a class="btn" href="./admin.php?manage=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">Редактировать</a>
                <a class="btn danger" href="./admin.php?delete=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">Удалить</a>
            </div>
        </div>
        </div>
        <?php }?>
    <?php } ?>

    <hr />

    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
 $_smarty_tpl->tpl_vars['article']->first = $_smarty_tpl->tpl_vars['article']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["public"]['first'] = $_smarty_tpl->tpl_vars['article']->first;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['public']['first']){?>
            <h2>Опубликованные статьи</h2>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['article']->value['public']=='1'){?>
        <div class="well" style="padding: 14px 19px;">
        <h4><a href="./admin.php?manage=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h4> Автор: <?php echo $_smarty_tpl->tpl_vars['article']->value['user_name'];?>
<br />
		<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['text'],'350');?>

        <div class="row">
            <div class="span6 offset6">
                <a class="btn info" href="./admin.php?disagree=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">Отклонить</a>
                <a class="btn" href="./admin.php?manage=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">Редактировать</a>
                <a class="btn danger" href="./admin.php?delete=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">Удалить</a>
            </div>
        </div>
        </div>
        <?php }?>
    <?php } ?>


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