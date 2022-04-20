<?php
/* Smarty version 3.1.36, created on 2022-04-04 07:27:25
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_624a81bd842288_78469789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1649050045,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624a81bd842288_78469789 (Smarty_Internal_Template $_smarty_tpl) {
?>An upgrade order has received its payment, but does not support automatic upgrades and requires manually processing.


Client ID: <?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>

Service ID: <?php echo $_smarty_tpl->tpl_vars['service_id']->value;?>

Order ID: <?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>



<?php if ($_smarty_tpl->tpl_vars['upgrade_type']->value == 'package') {?>New Package ID: <?php echo $_smarty_tpl->tpl_vars['new_package_id']->value;?>

Existing Billing Cycle: <?php echo $_smarty_tpl->tpl_vars['billing_cycle']->value;?>

New Billing Cycle: <?php echo $_smarty_tpl->tpl_vars['new_billing_cycle']->value;
} else { ?>Configurable Option: <?php echo $_smarty_tpl->tpl_vars['config_id']->value;?>

Option Type: <?php echo $_smarty_tpl->tpl_vars['option_type']->value;?>

Current Value: <?php echo $_smarty_tpl->tpl_vars['current_value']->value;?>

New Value: <?php echo $_smarty_tpl->tpl_vars['new_value']->value;
}?>



<?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
orders.php?action=view&id=<?php echo $_smarty_tpl->tpl_vars['order_id']->value;
}
}
