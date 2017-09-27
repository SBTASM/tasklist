<?php
/* Smarty version 3.1.31, created on 2017-09-18 16:07:56
  from "/app/template/admin/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59bfe14c85cb45_39087463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca204ce4c47975480b04d756057467cf64bb3653' => 
    array (
      0 => '/app/template/admin/edit.tpl',
      1 => 1505747273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bfe14c85cb45_39087463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('title', "Edit task");
?>
<form action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $_smarty_tpl->tpl_vars['task']->value->email;?>
">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name" value="<?php echo $_smarty_tpl->tpl_vars['task']->value->name;?>
">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <textarea rows="8" class="form-control" id="text" name="text"><?php echo $_smarty_tpl->tpl_vars['task']->value->text;?>
</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="status" class="form-check-input">
                        Completed
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <hr>
                    <button type="submit" class="btn btn-primary">Save</button></div>
            </div>
        </div>
    </div>
</form><?php }
}
