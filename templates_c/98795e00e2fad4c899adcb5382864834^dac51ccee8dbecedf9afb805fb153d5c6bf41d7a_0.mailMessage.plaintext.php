<?php
/* Smarty version 3.1.36, created on 2022-04-13 08:09:41
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62566925946f88_18345133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1649830181,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62566925946f88_18345133 (Smarty_Internal_Template $_smarty_tpl) {
?>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, 

This is a notice to inform you that your <?php echo $_smarty_tpl->tpl_vars['client_cc_type']->value;?>
 credit card ending with <?php echo $_smarty_tpl->tpl_vars['client_cc_number']->value;?>
 will be expiring next month on <?php echo $_smarty_tpl->tpl_vars['client_cc_expiry']->value;?>
. Please login to update your credit card information as soon as possible and prevent any interruptions in service at <?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>


If you have any questions regarding your account, please open a support ticket from the client area.

<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
