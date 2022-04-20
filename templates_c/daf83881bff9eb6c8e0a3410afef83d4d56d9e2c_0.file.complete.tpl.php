<?php
/* Smarty version 3.1.36, created on 2022-04-04 06:19:34
  from 'C:\xampp.7.4\htdocs\whm\templates\orderforms\standard_cart\complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_624a71d6e34165_91721826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daf83881bff9eb6c8e0a3410afef83d4d56d9e2c' => 
    array (
      0 => 'C:\\xampp.7.4\\htdocs\\whm\\templates\\orderforms\\standard_cart\\complete.tpl',
      1 => 1625806722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/standard_cart/common.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories-collapsed.tpl' => 1,
  ),
),false)) {
function content_624a71d6e34165_91721826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="order-standard_cart">

    <div class="row">
        <div class="cart-sidebar">
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="cart-body">
            <div class="header-lined">
                <h1 class="font-size-36"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderconfirmation'];?>
</h1>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderreceived'];?>
</p>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 offset-sm-2">
                    <div class="alert alert-info order-confirmation">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernumberis'];?>
 <span><?php echo $_smarty_tpl->tpl_vars['ordernumber']->value;?>
</span>
                    </div>
                </div>
            </div>

            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfinalinstructions'];?>
</p>

            <?php if ($_smarty_tpl->tpl_vars['expressCheckoutInfo']->value) {?>
                <div class="alert alert-info text-center">
                    <?php echo $_smarty_tpl->tpl_vars['expressCheckoutInfo']->value;?>

                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['expressCheckoutError']->value) {?>
                <div class="alert alert-danger text-center">
                    <?php echo $_smarty_tpl->tpl_vars['expressCheckoutError']->value;?>

                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['invoiceid']->value && !$_smarty_tpl->tpl_vars['ispaid']->value) {?>
                <div class="alert alert-warning text-center">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordercompletebutnotpaid'];?>

                    <br /><br />
                    <a href="viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>
" target="_blank" class="alert-link">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicenumber'];
echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>

                    </a>
                </div>
            <?php }?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons_html']->value, 'addon_html');
$_smarty_tpl->tpl_vars['addon_html']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon_html']->value) {
$_smarty_tpl->tpl_vars['addon_html']->do_else = false;
?>
                <div class="order-confirmation-addon-output">
                    <?php echo $_smarty_tpl->tpl_vars['addon_html']->value;?>

                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php if ($_smarty_tpl->tpl_vars['ispaid']->value) {?>
                <!-- Enter any HTML code which should be displayed when a user has completed checkout here -->
                <!-- Common uses of this include conversion and affiliate tracking scripts -->
            <?php }?>

            <div class="text-center">
                <a href="clientarea.php" class="btn btn-default">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['continueToClientArea'];?>

                    &nbsp;<i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<?php }
}