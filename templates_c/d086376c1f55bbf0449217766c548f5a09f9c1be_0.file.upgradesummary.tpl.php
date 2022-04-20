<?php
/* Smarty version 3.1.36, created on 2022-04-04 06:09:14
  from 'C:\xampp.7.4\htdocs\whm\templates\twenty-one\upgradesummary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_624a6f6a08c6a1_90336085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd086376c1f55bbf0449217766c548f5a09f9c1be' => 
    array (
      0 => 'C:\\xampp.7.4\\htdocs\\whm\\templates\\twenty-one\\upgradesummary.tpl',
      1 => 1625806722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624a6f6a08c6a1_90336085 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-body">
        <?php if ($_smarty_tpl->tpl_vars['promoerror']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['promoerror']->value,'textcenter'=>true), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['promorecurring']->value) {?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'recurringpromodesc'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf2' ][ 0 ], array( $_prefixVariable1,$_smarty_tpl->tpl_vars['promorecurring']->value )),'textcenter'=>true), 0, true);
?>
        <?php }?>

        <div class="alert alert-block alert-info text-center">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'upgradecurrentconfig'),$_smarty_tpl ) );?>
: <strong><?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['productname']->value;?>
</strong><?php if ($_smarty_tpl->tpl_vars['domain']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
)<?php }?>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th width="60%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderdesc'),$_smarty_tpl ) );?>
</th>
                <th width="40%" class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderprice'),$_smarty_tpl ) );?>
</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upgrades']->value, 'upgrade');
$_smarty_tpl->tpl_vars['upgrade']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['upgrade']->value) {
$_smarty_tpl->tpl_vars['upgrade']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "package") {?>
                    <tr>
                        <td><input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['upgrade']->value['newproductid'];?>
" /><input type="hidden" name="billingcycle" value="<?php echo $_smarty_tpl->tpl_vars['upgrade']->value['newproductbillingcycle'];?>
" /><?php echo $_smarty_tpl->tpl_vars['upgrade']->value['oldproductname'];?>
 => <?php echo $_smarty_tpl->tpl_vars['upgrade']->value['newproductname'];?>
</td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['upgrade']->value['price'];?>
</td>
                    </tr>
                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "configoptions") {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['upgrade']->value['configname'];?>
: <?php echo $_smarty_tpl->tpl_vars['upgrade']->value['originalvalue'];?>
 => <?php echo $_smarty_tpl->tpl_vars['upgrade']->value['newvalue'];?>
</td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['upgrade']->value['price'];?>
</td>
                    </tr>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <tr class="masspay-total">
                <td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ordersubtotal'),$_smarty_tpl ) );?>
:</td>
                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['promodesc']->value) {?>
                <tr class="masspay-total">
                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['promodesc']->value;?>
:</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
</td>
                </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['taxrate']->value) {?>
                <tr class="masspay-total">
                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['taxname']->value;?>
 @ <?php echo $_smarty_tpl->tpl_vars['taxrate']->value;?>
%:</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['tax']->value;?>
</td>
                </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['taxrate2']->value) {?>
                <tr class="masspay-total">
                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['taxname2']->value;?>
 @ <?php echo $_smarty_tpl->tpl_vars['taxrate2']->value;?>
%:</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['tax2']->value;?>
</td>
                </tr>
            <?php }?>
            <tr class="masspay-total">
                <td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ordertotalduetoday'),$_smarty_tpl ) );?>
:</td>
                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
            </tr>
            </tbody>
        </table>

        <?php if ($_smarty_tpl->tpl_vars['type']->value == "package") {?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'upgradeproductlogic'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'days'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'msg'=>((((($_prefixVariable2).(' (')).($_smarty_tpl->tpl_vars['upgrade']->value['daysuntilrenewal'])).(' ')).($_prefixVariable3)).(')'),'textcenter'=>true), 0, true);
?>
        <?php }?>

        <div class="row">
            <div class="col-sm-6">

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
" role="form">
                    <input type="hidden" name="step" value="2" />
                    <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
                    <?php if ($_smarty_tpl->tpl_vars['type']->value == "package") {?>
                        <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['upgrades']->value[0]['newproductid'];?>
" />
                        <input type="hidden" name="billingcycle" value="<?php echo $_smarty_tpl->tpl_vars['upgrades']->value[0]['newproductbillingcycle'];?>
" />
                    <?php }?>
                    <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderpromotioncode'),$_smarty_tpl ) );?>
</h2>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configoptions']->value, 'value', false, 'cid');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cid']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <input type="hidden" name="configoption[<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="input-group">
                        <input class="form-control" type="text" name="promocode" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderpromotioncode'),$_smarty_tpl ) );?>
" width="40"
                               <?php if ($_smarty_tpl->tpl_vars['promocode']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['promocode']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['promodesc']->value;?>
" disabled="disabled"<?php }?>>
                        <?php if ($_smarty_tpl->tpl_vars['promocode']->value) {?>
                            <div class="input-group-append">
                                <button type="submit" name="removepromo" class="btn btn-danger">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderdontusepromo'),$_smarty_tpl ) );?>

                                </button>
                            </div>
                        <?php } else { ?>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-success">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderpromovalidatebutton'),$_smarty_tpl ) );?>

                                </button>
                            </div>
                        <?php }?>
                    </div>
                </form>

            </div>
            <div class="col-sm-6">

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
                    <input type="hidden" name="step" value="3" />
                    <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
                    <?php if ($_smarty_tpl->tpl_vars['type']->value == "package") {?>
                        <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['upgrades']->value[0]['newproductid'];?>
" />
                        <input type="hidden" name="billingcycle" value="<?php echo $_smarty_tpl->tpl_vars['upgrades']->value[0]['newproductbillingcycle'];?>
" />
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configoptions']->value, 'value', false, 'cid');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cid']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <input type="hidden" name="configoption[<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if ($_smarty_tpl->tpl_vars['promocode']->value) {?><input type="hidden" name="promocode" value="<?php echo $_smarty_tpl->tpl_vars['promocode']->value;?>
"><?php }?>

                    <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderpaymentmethod'),$_smarty_tpl ) );?>
</h2>
                    <div class="form-group">
                        <select name="paymentmethod" id="inputPaymentMethod" class="form-control custom-select">
                            <?php if ($_smarty_tpl->tpl_vars['allowgatewayselection']->value) {?>
                                <option value="none"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'paymentmethoddefault'),$_smarty_tpl ) );?>
</option>
                            <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gateways']->value, 'gateway');
$_smarty_tpl->tpl_vars['gateway']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gateway']->value) {
$_smarty_tpl->tpl_vars['gateway']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['sysname'];?>
"<?php if ($_smarty_tpl->tpl_vars['gateway']->value['sysname'] == $_smarty_tpl->tpl_vars['selectedgateway']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['gateway']->value['name'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

            </div>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary" id="btnOrderContinue">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'continue'),$_smarty_tpl ) );?>
 <i class="fas fa-arrow-right"></i>
            </button>
        </div>

        </form>

    </div>
</div><?php }
}
