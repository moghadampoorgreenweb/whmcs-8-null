<?php
/* Smarty version 3.1.36, created on 2022-03-30 08:32:07
  from 'C:\xampp.7.4\htdocs\whm\templates\orderforms\standard_cart\sidebar-categories-collapsed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6243f9671e63a8_99382756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '758698fd2c9556fc8cecdda7f5fa8b9b7f3132b1' => 
    array (
      0 => 'C:\\xampp.7.4\\htdocs\\whm\\templates\\orderforms\\standard_cart\\sidebar-categories-collapsed.tpl',
      1 => 1625806722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/standard_cart/sidebar-categories-selector.tpl' => 1,
  ),
),false)) {
function content_6243f9671e63a8_99382756 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sidebar-collapsed">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondarySidebar']->value, 'panel');
$_smarty_tpl->tpl_vars['panel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->do_else = false;
?>
        <div class="panel card<?php if ($_smarty_tpl->tpl_vars['panel']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['panel']->value->getClass();
} else { ?> panel-default<?php }?>">
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories-selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['currencies']->value) {?>
        <div class="pull-right form-inline float-right">
            <form method="post" action="cart.php<?php if ($_smarty_tpl->tpl_vars['action']->value) {?>?a=<?php echo $_smarty_tpl->tpl_vars['action']->value;
if ($_smarty_tpl->tpl_vars['domain']->value) {?>&domain=<?php echo $_smarty_tpl->tpl_vars['domain']->value;
}
} elseif ($_smarty_tpl->tpl_vars['gid']->value) {?>?gid=<?php echo $_smarty_tpl->tpl_vars['gid']->value;
}?>">
                <select name="currency" onchange="submit()" class="form-control">
                    <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['choosecurrency'];?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'listcurr');
$_smarty_tpl->tpl_vars['listcurr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['listcurr']->value) {
$_smarty_tpl->tpl_vars['listcurr']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['listcurr']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['listcurr']->value['id'] == $_smarty_tpl->tpl_vars['currency']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['listcurr']->value['code'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </form>
        </div>
    <?php }?>

</div>
<?php }
}
