<?php
/* Smarty version 3.1.36, created on 2022-04-10 06:34:16
  from 'C:\xampp.7.4\htdocs\whm\templates\twenty-one\clientareadomainregisterns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62525e48f1e4c4_15944964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c6231589225110fdf7a1caec5d3bcc6c9092724' => 
    array (
      0 => 'C:\\xampp.7.4\\htdocs\\whm\\templates\\twenty-one\\clientareadomainregisterns.tpl',
      1 => 1625806722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62525e48f1e4c4_15944964 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'msg'=>$_smarty_tpl->tpl_vars['result']->value,'textcenter'=>true), 0, true);
}?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainregisternsexplanation'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_prefixVariable1), 0, true);
?>

<div class="card">
    <div class="card-body">
        <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=domainregisterns">
            <input type="hidden" name="sub" value="register" />
            <input type="hidden" name="domainid" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
" />

            <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainregisternsreg'),$_smarty_tpl ) );?>
</h3>

            <div class="form-group row">
                <label for="inputNs1" class="col-md-4 col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainregisternsns'),$_smarty_tpl ) );?>
</label>
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputNs1" name="ns" />
                        <div class="input-group-append">
                            <span class="input-group-text">. <?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputIp1" class="col-md-4 col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainregisternsip'),$_smarty_tpl ) );?>
</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="inputIp1" name="ipaddress" />
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasavechanges'),$_smarty_tpl ) );?>

                </button>
            </div>

        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=domainregisterns">
            <input type="hidden" name="sub" value="modify" />
            <input type="hidden" name="domainid" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
" />

            <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainregisternsmod'),$_smarty_tpl ) );?>
</h3>

            <div class="form-group row">
                <label for="inputNs2" class="col-md-4 col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainregisternsns'),$_smarty_tpl ) );?>
</label>
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputNs2" name="ns" />
                        <div class="input-group-append">
                            <span class="input-group-text">. <?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputIp2" class="col-md-4 col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainregisternscurrentip'),$_smarty_tpl ) );?>
</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="inputIp2" name="currentipaddress" />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputIp3" class="col-md-4 col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainregisternsnewip'),$_smarty_tpl ) );?>
</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="inputIp3" name="newipaddress" />
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasavechanges'),$_smarty_tpl ) );?>

                </button>
            </div>

        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=domainregisterns">
            <input type="hidden" name="sub" value="delete" />
            <input type="hidden" name="domainid" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
" />

            <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainregisternsdel'),$_smarty_tpl ) );?>
</h3>

            <div class="form-group row">
                <label for="inputNs3" class="col-md-4 col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainregisternsns'),$_smarty_tpl ) );?>
</label>
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputNs3" name="ns" />
                        <div class="input-group-append">
                            <span class="input-group-text">.<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasavechanges'),$_smarty_tpl ) );?>

                </button>
            </div>

        </form>
    </div>
</div>
<?php }
}
