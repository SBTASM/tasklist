<?php
/* Smarty version 3.1.31, created on 2017-09-18 15:44:16
  from "/app/template/login/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59bfdbc0a6ebc6_80072724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbedd350b0ae5d098566273c4002222030046357' => 
    array (
      0 => '/app/template/login/login.tpl',
      1 => 1505745853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bfdbc0a6ebc6_80072724 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('title', "Login");
if (!empty($_smarty_tpl->tpl_vars['myarray']->value)) {?>}
    <hr>
    Messages
    <hr>
<?php }?>

<form action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="post">
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" id="login" name="login" class="form-control">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="login">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
        </div>
        <div class="col-sm-12">
            <button class="btn btn-primary btn-block" type="submit">Login</button>
        </div>
    </div>
</div>
</form><?php }
}
