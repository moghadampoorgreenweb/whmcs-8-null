<?php
/* Smarty version 3.1.36, created on 2022-03-30 08:32:06
  from 'C:\xampp.7.4\htdocs\whm\templates\orderforms\standard_cart\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6243f966cacd17_87214352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7e28a60fc7f2d7a06a880fe959454131856cd34' => 
    array (
      0 => 'C:\\xampp.7.4\\htdocs\\whm\\templates\\orderforms\\standard_cart\\products.tpl',
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
function content_6243f966cacd17_87214352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="order-standard_cart">
    <div class="row">
        <div class="cart-sidebar sidebar">
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="cart-body">

            <div class="header-lined">
                <h1 class="font-size-36">
                    <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['headline']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['productGroup']->value['headline'];?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['productGroup']->value['name'];?>

                    <?php }?>
                </h1>
                <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['tagline']) {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['productGroup']->value['tagline'];?>
</p>
                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                <div class="alert alert-danger">
                    <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

                </div>
            <?php } elseif (!$_smarty_tpl->tpl_vars['productGroup']->value) {?>
                <div class="alert alert-info">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.selectCategory'),$_smarty_tpl ) );?>

                </div>
            <?php }?>

            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="products" id="products">
                <div class="row row-eq-height">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$__foreach_product_0_saved = $_smarty_tpl->tpl_vars['product'];
?>
                    <div class="col-md-6">
                        <div class="product clearfix" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
">
                            <header>
                                <span id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['stockControlEnabled']) {?>
                                    <span class="qty">
                                            <?php echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderavailable'];?>

                                        </span>
                                <?php }?>
                            </header>
                            <div class="product-desc">
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['featuresdesc']) {?>
                                    <p id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-description">
                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['featuresdesc'];?>

                                    </p>
                                <?php }?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['features'], 'value', false, 'feature');
$_smarty_tpl->tpl_vars['value']->iteration = 0;
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['value']->iteration++;
$__foreach_value_1_saved = $_smarty_tpl->tpl_vars['value'];
?>
                                        <li id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-feature<?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
">
                                            <span class="feature-value"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span>
                                            <?php echo $_smarty_tpl->tpl_vars['feature']->value;?>

                                        </li>
                                    <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </div>
                            <footer>
                                <div class="product-pricing" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-price">
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['bundledeal'];?>
<br />
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['displayprice']) {?>
                                            <span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['displayprice'];?>
</span>
                                        <?php }?>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['hasconfigoptions']) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['startingfrom'];?>

                                            <br />
                                        <?php }?>
                                        <span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['price'];?>
</span>
                                        <br />
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "monthly") {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "quarterly") {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "semiannually") {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "annually") {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "biennially") {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "triennially") {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>

                                        <?php }?>
                                        <br>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['setupFee']) {?>
                                            <small><?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['setupFee']->toPrefixed();?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];?>
</small>
                                        <?php }?>
                                    <?php }?>
                                </div>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add&<?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>bid=<?php echo $_smarty_tpl->tpl_vars['product']->value['bid'];
} else { ?>pid=<?php echo $_smarty_tpl->tpl_vars['product']->value['pid'];
}?>" class="btn btn-success btn-sm" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-order-button">
                                    <i class="fas fa-shopping-cart"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>

                                </a>
                            </footer>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['product']->iteration%2 == 0) {?>
                </div>
                <div class="row row-eq-height">
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
