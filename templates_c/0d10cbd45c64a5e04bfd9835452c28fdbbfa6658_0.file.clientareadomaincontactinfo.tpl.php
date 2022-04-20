<?php
/* Smarty version 3.1.36, created on 2022-04-09 13:22:17
  from 'C:\xampp.7.4\htdocs\whm\templates\twenty-one\clientareadomaincontactinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62516c69f37d59_97677166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d10cbd45c64a5e04bfd9835452c28fdbbfa6658' => 
    array (
      0 => 'C:\\xampp.7.4\\htdocs\\whm\\templates\\twenty-one\\clientareadomaincontactinfo.tpl',
      1 => 1625806722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62516c69f37d59_97677166 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['successful']->value) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changessavedsuccessfully'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_prefixVariable1,'textcenter'=>true), 0, true);
}?>

<?php if ($_smarty_tpl->tpl_vars['pending']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['pendingMessage']->value,'textcenter'=>true), 0, true);
}?>

<?php if ($_smarty_tpl->tpl_vars['domainInformation']->value && !$_smarty_tpl->tpl_vars['pending']->value && $_smarty_tpl->tpl_vars['domainInformation']->value->getIsIrtpEnabled() && $_smarty_tpl->tpl_vars['domainInformation']->value->isContactChangePending()) {?>
    <?php if ($_smarty_tpl->tpl_vars['domainInformation']->value->getPendingSuspension()) {?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domains.verificationRequired'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domains.newRegistration'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'msg'=>"<strong>".$_prefixVariable2."</strong><br>".$_prefixVariable3,'textcenter'=>true), 0, true);
?>
    <?php } else { ?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domains.contactChangePending'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domains.contactsChanged'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>"<strong>".$_prefixVariable4."</strong><br>".$_prefixVariable5,'textcenter'=>true), 0, true);
?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['error']->value,'textcenter'=>true), 0, true);
}?>

<div class="card">
    <div class="card-body">
        <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincontactinfo'),$_smarty_tpl ) );?>
</h3>

        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'whoisContactWarning'),$_smarty_tpl ) );?>
</p>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=domaincontacts" id="frmDomainContactModification">

            <input type="hidden" name="sub" value="save" />
            <input type="hidden" name="domainid" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
" />

            <ul class="nav nav-tabs responsive-tabs-sm" role="tablist">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contactdetails']->value, 'values', false, 'contactdetail');
$_smarty_tpl->tpl_vars['values']->index = -1;
$_smarty_tpl->tpl_vars['values']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contactdetail']->value => $_smarty_tpl->tpl_vars['values']->value) {
$_smarty_tpl->tpl_vars['values']->do_else = false;
$_smarty_tpl->tpl_vars['values']->index++;
$_smarty_tpl->tpl_vars['values']->first = !$_smarty_tpl->tpl_vars['values']->index;
$__foreach_values_0_saved = $_smarty_tpl->tpl_vars['values'];
?>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_smarty_tpl->tpl_vars['values']->first) {?> active<?php }?>" id="tabSelector<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
" data-toggle="tab" href="#tab<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
" role="tab"><?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
</a>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['values'] = $__foreach_values_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <div class="responsive-tabs-sm-connector"><div class="channel"></div><div class="bottom-border"></div></div>
            <div class="tab-content p-4">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contactdetails']->value, 'values', false, 'contactdetail');
$_smarty_tpl->tpl_vars['values']->index = -1;
$_smarty_tpl->tpl_vars['values']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contactdetail']->value => $_smarty_tpl->tpl_vars['values']->value) {
$_smarty_tpl->tpl_vars['values']->do_else = false;
$_smarty_tpl->tpl_vars['values']->index++;
$_smarty_tpl->tpl_vars['values']->first = !$_smarty_tpl->tpl_vars['values']->index;
$__foreach_values_1_saved = $_smarty_tpl->tpl_vars['values'];
?>
                    <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['values']->first) {?> show active<?php }?>" id="tab<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
" role="tabpanel">

                        <div class="form-check">
                            <label>
                                <input type="radio" class="form-check-input" name="wc[<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
1" value="contact" onclick="useDefaultWhois(this.id)" />
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincontactusexisting'),$_smarty_tpl ) );?>

                            </label>
                        </div>

                        <div class="row">
                            <div class="offset-1 col-10">
                                <div class="form-group">
                                    <label for="<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincontactchoose'),$_smarty_tpl ) );?>
</label>
                                    <input type="hidden" name="sel[<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
]" value="">
                                    <select id="<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
3" class="form-control custom-select <?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
defaultwhois" name="sel[<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
]" disabled>
                                        <option value="u<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincontactprimary'),$_smarty_tpl ) );?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                                            <option value="c<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-check">
                            <label>
                                <input type="radio" class="form-check-input" name="wc[<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
2" value="custom" onclick="useCustomWhois(this.id)" checked />
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincontactusecustom'),$_smarty_tpl ) );?>

                            </label>
                        </div>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['values']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->tpl_vars['contactdetailstranslations']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</label>
                                <input type="text" name="contactdetails[<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" data-original-value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" class="form-control <?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
customwhois<?php if (array_key_exists($_smarty_tpl->tpl_vars['contactdetail']->value,$_smarty_tpl->tpl_vars['irtpFields']->value) && in_array($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['irtpFields']->value[$_smarty_tpl->tpl_vars['contactdetail']->value])) {?> irtp-field<?php }?>" />
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['values'] = $__foreach_values_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <p class="text-center">
                <?php if ($_smarty_tpl->tpl_vars['domainInformation']->value && $_smarty_tpl->tpl_vars['irtpFields']->value) {?>
                    <input id="irtpOptOut" type="hidden" name="irtpOptOut" value="0">
                    <input id="irtpOptOutReason" type="hidden" name="irtpOptOutReason" value="">
                <?php }?>
                <button type="submit" class="btn btn-primary">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasavechanges'),$_smarty_tpl ) );?>

                </button>
                <button type="reset" class="btn btn-default">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareacancel'),$_smarty_tpl ) );?>

                </button>
            </p>

        </form>

    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['domainInformation']->value && $_smarty_tpl->tpl_vars['irtpFields']->value) {?>
    <div class="modal fade" id="modalIRTPConfirmation" role="dialog" aria-labelledby="IRTPConfirmationLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content card">
                <div id="modalIRTPConfirmationHeading" class="modal-header card-header bg-primary text-light">
                    <h4 class="modal-title" id="IRTPConfirmationLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domains.importantReminder'),$_smarty_tpl ) );?>
</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.close'),$_smarty_tpl ) );?>
</span>
                    </button>
                </div>
                <div id="modalIRTPConfirmationBody" class="modal-body card-body text-center">
                    <div class="row">
                        <div class="col-sm-10 offset-sm-1">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domains.irtpNotice'),$_smarty_tpl ) );?>

                        </div>
                        <div class="col-sm-12">
                            <div class="checkbox-inline">
                                <label for="modalIrtpOptOut">
                                    <input id="modalIrtpOptOut" class="form-check-input" type="checkbox" value="1">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domains.optOut'),$_smarty_tpl ) );?>

                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12 text-left">
                                    <label for="modalReason"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domains.optOutReason'),$_smarty_tpl ) );?>
</label>:
                                </div>
                                <div class="col-sm-12">
                                    <input id="modalReason" type="text" class="form-control input-600" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="modalIRTPConfirmationFooter" class="modal-footer card-footer">
                    <button type="button" id="IRTPConfirmation-Submit" class="btn btn-primary" onclick="irtpSubmit();return false;">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsticketsubmit'),$_smarty_tpl ) );?>

                    </button>
                    <button type="button" id="IRTPConfirmation-Cancel" class="btn btn-default" data-dismiss="modal">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cancel'),$_smarty_tpl ) );?>

                    </button>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
