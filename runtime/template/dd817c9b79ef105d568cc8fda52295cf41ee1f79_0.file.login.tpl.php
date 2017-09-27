<?php
/* Smarty version 3.1.31, created on 2017-09-18 14:15:04
  from "/app/template/admin/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59bfc6d8ee3071_41070692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd817c9b79ef105d568cc8fda52295cf41ee1f79' => 
    array (
      0 => '/app/template/admin/login.tpl',
      1 => 1505740496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bfc6d8ee3071_41070692 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="wrapper">
                <form class="form-signin" action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="post">
                    <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
                    <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
