<?php
/* Smarty version 3.1.31, created on 2017-09-18 16:04:35
  from "/app/template/task/preview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59bfe083ac56d7_55293992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '652894a6638e4f179253d1facc2535561eda32b4' => 
    array (
      0 => '/app/template/task/preview.tpl',
      1 => 1505747072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bfe083ac56d7_55293992 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered">
    <thead>
    <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</th>
        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</th>
        <th><?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?> Uncomplate <?php } else { ?> Complate <?php }?></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td width="320" height="240"><img src="<?php if ($_smarty_tpl->tpl_vars['task']->value->image == NULL) {?>/assets/img/no_photo.png<?php } else { ?>/assets/images/<?php echo $_smarty_tpl->tpl_vars['task']->value->image;
}?>"></td>
        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</td>
    </tr>
    </tbody>
</table><?php }
}
