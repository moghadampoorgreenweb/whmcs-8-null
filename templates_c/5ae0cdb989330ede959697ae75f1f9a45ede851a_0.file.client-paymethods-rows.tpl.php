<?php
/* Smarty version 3.1.36, created on 2022-03-29 05:33:19
  from 'C:\xampp.7.4\htdocs\whm\admin\templates\blend\client-paymethods-rows.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62427dff573fb5_67951857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ae0cdb989330ede959697ae75f1f9a45ede851a' => 
    array (
      0 => 'C:\\xampp.7.4\\htdocs\\whm\\admin\\templates\\blend\\client-paymethods-rows.tpl',
      1 => 1625806722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62427dff573fb5_67951857 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payMethods']->value, 'payMethod', false, 'i');
$_smarty_tpl->tpl_vars['payMethod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['payMethod']->value) {
$_smarty_tpl->tpl_vars['payMethod']->do_else = false;
?>
    <tr class="<?php if ($_smarty_tpl->tpl_vars['i']->value%2) {?>altrow<?php }?>">
        <td class="client-paymethod<?php if ($_smarty_tpl->tpl_vars['payMethod']->value['isUsingInactiveGateway']) {?> gateway-inactive<?php }?>">
            <a id="btnPayMethodDetails<?php echo $_smarty_tpl->tpl_vars['payMethod']->value['id'];?>
"
               href="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value['url'];?>
"
               data-modal-title="Pay Method Details"
               data-btn-submit-id="savePaymentMethod"
               data-btn-submit-label="<?php echo AdminLang::trans('global.savechanges');?>
"
               data-role="edit-paymethod"
               onclick="return false;"
               <?php if ($_smarty_tpl->tpl_vars['payMethod']->value['isUsingInactiveGateway']) {?>
               title="<?php echo AdminLang::trans('clientsummary.payMethodGatewayInactive');?>
"
               <?php }?>
               class="paymethod-description open-modal">
                <i class="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value['iconClass'];?>
"></i>
                &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['payMethod']->value['description'];?>

                <?php if ($_smarty_tpl->tpl_vars['payMethod']->value['isDefault']) {?><i class="pull-right fal fa-user-check">&nbsp;&nbsp;</i><?php }?>
            </a>
        </td>
    </tr>
    <?php
}
if ($_smarty_tpl->tpl_vars['payMethod']->do_else) {
?>
    <tr>
        <td align="center">No Pay Methods</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
