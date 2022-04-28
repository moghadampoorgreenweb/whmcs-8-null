<?php
/* Smarty version 3.1.36, created on 2022-04-27 09:16:40
  from 'mailMessage:subject' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6268edd869c6f8_84650607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3658c8804036d8e01de31155025e7476dc5a36b3' => 
    array (
      0 => 'mailMessage:subject',
      1 => 1651043800,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6268edd869c6f8_84650607 (Smarty_Internal_Template $_smarty_tpl) {
?>[Ticket ID: <?php echo $_smarty_tpl->tpl_vars['ticket_id']->value;?>
] <?php echo $_smarty_tpl->tpl_vars['ticket_subject']->value;
}
}
