<?php
/* Smarty version 3.1.36, created on 2022-04-25 14:54:19
  from 'C:\xampp.7.4\htdocs\whm\modules\addons\order_vm\templates\plan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_626699fb304c21_40443133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59f77f0e87f5bf4f6a242ff57fee3322fed85e41' => 
    array (
      0 => 'C:\\xampp.7.4\\htdocs\\whm\\modules\\addons\\order_vm\\templates\\plan.tpl',
      1 => 1650891242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626699fb304c21_40443133 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="index.php">
    <input type="hidden" name="m" value="order_vm">
    <input type="hidden" name="orderResult" value="true">
    <input type="hidden" name="opratingsystem" value="<?php echo $_smarty_tpl->tpl_vars['get']->value['opratingsystem'];?>
">
    <input type="hidden" name="disk" value="<?php echo $_smarty_tpl->tpl_vars['get']->value['disk'];?>
">
    <input type="hidden" name="region" value="<?php echo $_smarty_tpl->tpl_vars['get']->value['region'];?>
">
    <input type="hidden" name="orderResult" value="true">

    <div class="form-group">
        <label for="pwd">Plan :</label>
        <select class="js-example-basic-multiple form-control" id="e1" name="plan">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plan']->value, 'foo');
$_smarty_tpl->tpl_vars['foo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
___<?php echo $_smarty_tpl->tpl_vars['foo']->value['descripion'];?>
___<?php echo $_smarty_tpl->tpl_vars['foo']->value['region']['name'];?>

                    ___<?php echo $_smarty_tpl->tpl_vars['foo']->value['spase']['name'];?>
___<?php echo $_smarty_tpl->tpl_vars['foo']->value['opratingsystem']['name'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>

    <button type="submit" class="btn btn-default justify-content-center btn-success">Order</button>

</form><?php }
}
