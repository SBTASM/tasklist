<?php
/* Smarty version 3.1.31, created on 2017-09-18 15:59:07
  from "/app/template/task/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59bfdf3babb744_57207592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bf8fd0cdb801b3a379b0f093c11b9b339ba40fd' => 
    array (
      0 => '/app/template/task/index.tpl',
      1 => 1505746744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bfdf3babb744_57207592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('title', "All tasks");
?>

<hr>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="<?php echo $_SERVER['REQUEST_URI'];?>
&sort=name">Sort by name</a></li>
                    <li class="page-item"><a class="page-link" href="<?php echo $_SERVER['REQUEST_URI'];?>
&sort=email">Sort by email</a></li>
                    <li class="page-item"><a class="page-link" href="<?php echo $_SERVER['REQUEST_URI'];?>
&sort=status">Sort by status</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-sm-12">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
?>
            <table class="table table-bordered">
                <thead>
                <?php if ($_smarty_tpl->tpl_vars['is_admin']->value == true) {?>
                    <tr>
                        <th class="text-center <?php if ($_smarty_tpl->tpl_vars['task']->value->status == 0) {?>text-danger<?php } else { ?>text-success<?php }?>"><?php if ($_smarty_tpl->tpl_vars['task']->value->status == 0) {?> Uncomplate <?php } else { ?> Complate <?php }?></th>
                        <th class="text-right"><a href="/index.php?c=admin&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['task']->value->id;?>
">Edit</a></th>
                    </tr>
                <?php } else { ?>
                    <tr>
                        <th colspan="2" class="text-center <?php if ($_smarty_tpl->tpl_vars['task']->value->status == 0) {?>text-danger<?php } else { ?>text-success<?php }?>"><?php if ($_smarty_tpl->tpl_vars['task']->value->status == 0) {?> Uncomplate <?php } else { ?> Complate <?php }?></th>
                    </tr>
                <?php }?>
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['task']->value->name;?>
</th>
                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['task']->value->email;?>
</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="320" height="240"><img src="<?php if ($_smarty_tpl->tpl_vars['task']->value->image == NULL) {?>/assets/img/no_photo.png<?php } else { ?>/assets/images/<?php echo $_smarty_tpl->tpl_vars['task']->value->image;
}?>"></td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['task']->value->text;?>
</td>
                </tr>
                </tbody>
            </table>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>

</div>
<?php if ($_smarty_tpl->tpl_vars['pages']->value == 0) {?>
    <div class="text-center">
        <p class="text-danger h2">Tasks not found:(</p>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>
    <hr>
<?php }?>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example" class="">
                <ul class="pagination justify-content-center">
                    <?php if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>
                        <?php if ($_smarty_tpl->tpl_vars['pages']->value > 5) {?>
                            <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? 4+1 - (1) : 1-(4)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
                                <li class="page-item"><a class="page-link" href="<?php echo $_SERVER['REQUEST_URI'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                            <?php }
}
?>

                            <li class="page-item"><a class="page-link">...</a> </a></li
                            <li class="page-item"><a class="page-link" href="/<?php echo $_SERVER['REQUEST_URI'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['pages']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value-1;?>
</a></li>
                        <?php } else { ?>
                            <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
                                <li class="page-item"><a class="page-link" href="<?php echo $_SERVER['REQUEST_URI'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                            <?php }
}
?>

                        <?php }?>
                    <?php }?>
                </ul>
            </nav>
        </div>
    </div>
</div><?php }
}
