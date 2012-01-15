<?php /* Smarty version Smarty 3.1.4, created on 2012-01-15 14:17:42
         compiled from "/home/vertigo2/projects/test.local/views/indexcontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10212619924f1093ef33af06-93646686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7ff52cd1bb4b6d744abbfc2456596dc1f579be0' => 
    array (
      0 => '/home/vertigo2/projects/test.local/views/indexcontent.tpl',
      1 => 1326633423,
      2 => 'file',
    ),
    'dc374e6a781a962ce10a2498183e636df1e4fa7d' => 
    array (
      0 => '/home/vertigo2/projects/test.local/views/pagebody.tpl',
      1 => 1326407729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10212619924f1093ef33af06-93646686',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f1093ef41151',
  'variables' => 
  array (
    'siteConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f1093ef41151')) {function content_4f1093ef41151($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/vertigo2/projects/test.local/libs/Smarty/plugins/modifier.truncate.php';
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
            
    <?php if ($_smarty_tpl->tpl_vars['articles']->value){?>
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
    <?php }else{ ?>
        <h3>Нет статей для просмотра</h3>
    <?php }?>

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