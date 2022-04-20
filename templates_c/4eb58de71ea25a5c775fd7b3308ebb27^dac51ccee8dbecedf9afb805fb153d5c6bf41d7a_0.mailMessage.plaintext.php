<?php
/* Smarty version 3.1.36, created on 2022-04-13 06:16:32
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62564ea0df0ec7_95523985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1649823392,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62564ea0df0ec7_95523985 (Smarty_Internal_Template $_smarty_tpl) {
?>To reset your password, please click on the link below.


<?php echo $_smarty_tpl->tpl_vars['reset_password_url']->value;?>



If you're having trouble, try copying and pasting the following URL into your browser:
<?php echo $_smarty_tpl->tpl_vars['reset_password_url']->value;?>



If you did not request this reset, you can ignore this email. It will expire in 2 hours time.


<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
