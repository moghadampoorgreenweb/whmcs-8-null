<?php
/* Smarty version 3.1.36, created on 2022-03-30 08:30:37
  from 'C:\xampp.7.4\htdocs\whm\admin\templates\blend\authconfirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6243f90d7a9451_62483126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97b5970b5977315f009277fe1eadd625246190ae' => 
    array (
      0 => 'C:\\xampp.7.4\\htdocs\\whm\\admin\\templates\\blend\\authconfirm.tpl',
      1 => 1625806722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6243f90d7a9451_62483126 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.contentarea {
    background-color: #f8f8f8;
}
</style>

<div class="auth-container">

    <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'login.auth.heading'),$_smarty_tpl ) );?>
</h2>

    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'login.auth.paragraph'),$_smarty_tpl ) );?>
</p>

    <?php if ($_smarty_tpl->tpl_vars['incorrect']->value) {?>
        <div class="alert alert-danger text-center" style="padding:5px;margin-bottom:10px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'login.auth.incorrect'),$_smarty_tpl ) );?>
</div>
    <?php }?>

    <form method="post" action="">
        <input type="hidden" name="authconfirm" value="1">

        <div class="form-group">
            <label for="inputConfirmPassword"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'fields.password'),$_smarty_tpl ) );?>
</label>
            <input type="password" class="form-control" id="inputConfirmPassword" name="confirmpw" placeholder="" autofocus>
        </div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post_fields']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <button type="submit" class="btn btn-primary btn-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'fields.confpassword'),$_smarty_tpl ) );?>
</button>
    </form>

</div>
<?php }
}
