<?php
/* Smarty version 3.1.36, created on 2022-04-28 05:56:53
  from 'mailMessage:subject' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_626a1085bb5555_08141233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3658c8804036d8e01de31155025e7476dc5a36b3' => 
    array (
      0 => 'mailMessage:subject',
      1 => 1651118213,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a1085bb5555_08141233 (Smarty_Internal_Template $_smarty_tpl) {
?>[Ticket ID: <?php echo $_smarty_tpl->tpl_vars['ticket_tid']->value;?>
] <?php echo $_smarty_tpl->tpl_vars['ticket_subject']->value;
}
}
