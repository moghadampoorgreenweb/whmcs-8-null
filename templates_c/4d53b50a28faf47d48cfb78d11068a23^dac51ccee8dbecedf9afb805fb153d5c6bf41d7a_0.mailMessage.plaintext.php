<?php
/* Smarty version 3.1.36, created on 2022-04-14 10:01:03
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6257d4bf38c4c8_33176058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1649923263,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6257d4bf38c4c8_33176058 (Smarty_Internal_Template $_smarty_tpl) {
?>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, 

This is a notice that an invoice has been generated on <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
. 

Your payment method is: <?php echo $_smarty_tpl->tpl_vars['invoice_payment_method']->value;?>
 

Invoice #<?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>

Amount Due: <?php echo $_smarty_tpl->tpl_vars['invoice_total']->value;?>

Due Date: <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>
 

Invoice Items 

<?php echo $_smarty_tpl->tpl_vars['invoice_html_contents']->value;?>
 
------------------------------------------------------ 

You can login to your client area to view and pay the invoice at <?php echo $_smarty_tpl->tpl_vars['invoice_link']->value;?>
 

<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
