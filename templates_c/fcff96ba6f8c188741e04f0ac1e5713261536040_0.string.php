<?php
/* Smarty version 3.1.36, created on 2022-03-28 08:22:10
  from 'fcff96ba6f8c188741e04f0ac1e5713261536040' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_624154121ca408_15572154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624154121ca408_15572154 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wizard-transition-step">
    <div class="icon"><i class="far fa-lightbulb"></i></div>
    <div class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"wizard.setupComplete"),$_smarty_tpl ) );?>
</div>
    <div class="tag"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"wizard.readyToBeginUsing"),$_smarty_tpl ) );?>
</div>
    <div class="greyout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"wizard.runAgainMsg"),$_smarty_tpl ) );?>
</div>
    <div style="margin:10px 0 0 0;" class="greyout hidden" id="enomEnabled">
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"global.clickhere"),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"wizard.enomIpWhiteList",'link'=>"<a href='https://docs.whmcs.com/Enom#IP_Registration_.28User_not_permitted_from_this_IP_address.29' class='autoLinked'>".$_prefixVariable1."</a>"),$_smarty_tpl ) );?>

    </div>
</div><?php }
}
