<?php
/* Smarty version 3.1.36, created on 2022-04-04 12:37:06
  from 'C:\xampp.7.4\htdocs\whm\modules\servers\camp_directadmin\usage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_624aca528b7c71_31163764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aead8bffedfb6bdca0c7650d7b5f9e6a76f1781a' => 
    array (
      0 => 'C:\\xampp.7.4\\htdocs\\whm\\modules\\servers\\camp_directadmin\\usage.tpl',
      1 => 1649068615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624aca528b7c71_31163764 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><b>Usage</b></h2>

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Username:</th>
        <th scope="col"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="col"></th>
        <th scope="row">Password:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['password']->value;?>
</td>
        <th scope="col"></th>
    </tr>
    </tbody>
    <tbody>
    <tr>
        <th scope="col"></th>
        <th scope="row">Bandwidth:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['bandwidth']->value;?>
</td>
    </tr>
    </tbody>
    <tbody>
    <tr>
        <th scope="col"></th>
        <th scope="row">Domain:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</td>
    </tr>
    </tbody>
    <tbody>
    <tr>
        <th scope="col"></th>
        <th scope="row">Status:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</td>
    </tr>
    </tbody>
    <tbody>
    <tr>
        <th scope="col"></th>
        <th scope="row">Mysql:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['mysql']->value;?>
</td>
    </tr>
    </tbody>
    <tbody>
    <tr>
        <th scope="col"></th>
        <th scope="row">Emails:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['nemails']->value;?>
</td>
    </tr>
    </tbody>
    <tbody>
    <tr>
        <th scope="col"></th>
        <th scope="row">Ftp:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['ftp']->value;?>
</td>
    </tr>
    </tbody>
</table>

<form name="submitform" method="post" action="clientarea.php?action=productdetails">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
" />
    <input type="hidden" name="modop" value="custom" />
    <input type="hidden" name="a" value="reboot" />
</form>

<?php echo '<script'; ?>
>
    $('a:contains("RebootServer")').click(function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Reboot it!'
        }).then((result) => {
            if (result.isConfirmed) {

                document.submitform.submit();
                Swal.fire(
                    'Reboot!',
                    'Your server has been Reboot.',
                    'success'
                )
            }
        });
        //event.preventDefault();
    });
<?php echo '</script'; ?>
><?php }
}
