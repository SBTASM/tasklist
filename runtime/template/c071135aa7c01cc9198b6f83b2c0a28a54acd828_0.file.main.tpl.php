<?php
/* Smarty version 3.1.31, created on 2017-09-18 13:48:35
  from "/app/template/layout/main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59bfc0a3ad1ae8_78003004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c071135aa7c01cc9198b6f83b2c0a28a54acd828' => 
    array (
      0 => '/app/template/layout/main.tpl',
      1 => 1505664056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_59bfc0a3ad1ae8_78003004 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />
    <link rel="stylesheet" type="text/css" media="print" href="assets/css/print.css"  />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/prettyPhoto.css" />

    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/prettyPhoto.css" />

    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap-reboot.min.css" />

    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="screen" href="assets/css/ie-fix.css" /><![endif]-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="/resources/demos/style.css">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.4.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/jquery.tweet.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/jquery.ScrollTo.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/jquery.prettyPhoto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/jquery.quicksand.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/jquery.quicksand-config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/scripts.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="page-shadow">
    <div id="page">
        <div class="content-innertube">
            <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div id="stripe"></div>
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            <br/>
            <div id="stripe"></div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</div><!-- page-shadow end -->
</body>
</html><?php }
}
