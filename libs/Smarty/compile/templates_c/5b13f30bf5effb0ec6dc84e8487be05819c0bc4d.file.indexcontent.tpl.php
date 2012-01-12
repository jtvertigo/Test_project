<?php /* Smarty version Smarty 3.1.4, created on 2012-01-12 22:58:19
         compiled from "/opt/lampp/htdocs/sites/test.local/views/indexcontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17983956114f0f577b807b71-68493002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b13f30bf5effb0ec6dc84e8487be05819c0bc4d' => 
    array (
      0 => '/opt/lampp/htdocs/sites/test.local/views/indexcontent.tpl',
      1 => 1326404868,
      2 => 'file',
    ),
    '3b7bb45583844a2d69229b11568142c6317a18bd' => 
    array (
      0 => '/opt/lampp/htdocs/sites/test.local/views/pagebody.tpl',
      1 => 1326404893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17983956114f0f577b807b71-68493002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f0f577b8dfc1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0f577b8dfc1')) {function content_4f0f577b8dfc1($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/opt/lampp/htdocs/sites/test.local/libs/Smarty/plugins/modifier.truncate.php';
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
            
    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['article']->value['public']==1){?>
        <h4><a href="./?article=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a><br /></h4>
        Автор: <?php echo $_smarty_tpl->tpl_vars['article']->value['user_name'];?>
<br />
		<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['text'],'350');?>
<hr />
        <?php }?>
    <?php } ?>

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