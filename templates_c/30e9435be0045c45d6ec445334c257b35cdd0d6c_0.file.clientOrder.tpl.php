<?php
/* Smarty version 3.1.36, created on 2022-04-27 08:10:35
  from 'C:\xampp.7.4\htdocs\whm\modules\addons\order_vm\templates\clientOrder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6268de5bdd46a7_11948048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30e9435be0045c45d6ec445334c257b35cdd0d6c' => 
    array (
      0 => 'C:\\xampp.7.4\\htdocs\\whm\\modules\\addons\\order_vm\\templates\\clientOrder.tpl',
      1 => 1651039826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6268de5bdd46a7_11948048 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .lds-dual-ring {
        display: inline-block;
        width: 30%;
        height: 25px;
    }

    .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 20px;
        height: 20px;
        border-radius: 90%;

        margin-top: 10px;
        margin-right: 1000px;
        border: 6px solid #9fbfdf;
        border-color: #0c0c0c transparent #2BABCF transparent;
        animation: lds-dual-ring 1.2s linear infinite;
    }

    @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>
<form action="index.php">
    <input type="hidden" name="m" value="order_vm">
    <input type="hidden" name="orderResult" value="true">
    <div class="form-group">
        <label for="pwd">Region :</label>
        <select class="js-example-basic-multiple form-control" id="region" name="region">
            <option class="none" value="">Select</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['region']->value, 'foo');
$_smarty_tpl->tpl_vars['foo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    <div class="form-group">
        <label for="pwd">Opratingsystem :</label>
        <select class="js-example-basic-multiple form-control" id="opratingsystem" name="opratingsystem">
            <option class="none" value="">Select</option>
        </select>
    </div>

    <div class="form-group">
        <label for="pwd">Disk :</label>
        <select class="js-example-basic-multiple form-control" id="disk" name="disk">
            <option class="none" value="">Select</option>
        </select>
    </div>
    <div class="form-group">
        <label for="pwd">Plan :</label>
        <select class="js-example-basic-multiple form-control" id="plan" name="plan">
            <option class="none" value="">Select</option>
        </select>
    </div>

    <button type="submit" id="submit" class="btn btn-default justify-content-center btn-success">Order</button>
    <div style="display: inline ; float: right " id="load"></div>

</form>


<?php echo '<script'; ?>
>


    $('#region').change(function () {

        $.ajax({
            url: "index.php?m=order_vm&action=region",
            cache: false,
            type: "GET",
            data: {
                region: $('#region').val()
            },
            success: function (result) {
                result = JSON.parse(result);
                $('#opratingsystem').empty();
                $('#opratingsystem').append("<option value=''>Select</option>");
                result.forEach(function (item) {
                    $('#opratingsystem').append("<option value=" + item.id + " >" + item.name + "</option>");
                });
            },
            beforeSend: function (result) {
                console.log(result)
            },
            complete: function (xhr, textStatus) {
                console.log(xhr.status);
            },
        });
    });

    $('#opratingsystem').change(function () {
        $.ajax({
            url: "index.php?m=order_vm&action=os",
            cache: false,
            type: "GET",
            data: {
                region: $('#region').val(),
                opratingsystem: $('#opratingsystem').val()
            },
            success: function (result) {
                result = JSON.parse(result);
                $('#disk').empty();
                $('#disk').append("<option value=''>Select</option>");
                result.forEach(function (item) {
                    $('#disk').append("<option value=" + item.id + " >" + item.name + "</option>");
                });
            },
            beforeSend: function (result) {
                console.log(result)
            },
            complete: function (xhr, textStatus) {
                console.log(xhr.status);
            },
        });
    });
    $('#disk').change(function () {
        $.ajax({
            url: "index.php?m=order_vm&action=plan",
            cache: false,
            type: "GET",
            data: {
                region: $('#region').val(),
                opratingsystem: $('#opratingsystem').val(),
                disk: $('#disk').val()
            },
            success: function (result) {
                result = JSON.parse(result);
                $('#plan').empty();
                $('#plan').append("<option value=''>Select</option>");
                result.forEach(function (item) {
                    $('#plan').append("<option value=" + item.id + " >" + item.name + "</option>");
                });
            },
            beforeSend: function (result) {
                console.log(result)
            },
            complete: function (xhr, textStatus) {
                console.log(xhr.status);
            },
        });
    });


    $('#submit').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "index.php?m=order_vm&action=submit",
            cache: false,
            type: "POST",
            data: {
                region: $('#region').val(),
                opratingsystem: $('#opratingsystem').val(),
                disk: $('#disk').val(),
                plan: $('#plan').val(),
            },
            success: function (result) {
                $("#load").empty();
                Swal.fire({
                    icon: 'success',
                    title: 'Your order has been saved',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            beforeSend: function (result) {
                $("#load").html("<div style='display: inline' class='lds-dual-ring'></div>");
            },

        });
    });


<?php echo '</script'; ?>
>

<?php }
}
