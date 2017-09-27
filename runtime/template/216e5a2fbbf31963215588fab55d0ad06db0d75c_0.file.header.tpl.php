<?php
/* Smarty version 3.1.31, created on 2017-09-18 17:12:17
  from "/app/template/layout/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59bff0610d2669_70118751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '216e5a2fbbf31963215588fab55d0ad06db0d75c' => 
    array (
      0 => '/app/template/layout/header.tpl',
      1 => 1505751135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bff0610d2669_70118751 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="header">
    <h1><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</h1>
    <div id="main-nav-bg">
        <ul id="main-nav">
            <li><a href="/index.php?c=task&a=index">Tasks</a></li>
            <li><a href="/index.php?c=task&a=create">Create new</a></li>
            <li><a href="/index.php?c=admin&a=about">About</a></li>
            <?php if ($_SESSION['logged'] == true) {?>
                <li><a href="/index.php?c=login&a=logout">Logout</a></li>
            <?php } else { ?>
                <li><a href="/index.php?c=login&a=login">Login</a></li>
            <?php }?>
        </ul>
        <div class="clear"></div>
    </div><!-- main-nav-bg end -->
</div><!-- header end --><?php }
}
