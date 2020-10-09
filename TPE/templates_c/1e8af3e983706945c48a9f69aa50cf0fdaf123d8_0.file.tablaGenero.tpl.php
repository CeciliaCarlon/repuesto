<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 00:59:54
  from 'C:\xampp\htdocs\TPE\templates\tablaGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f99ea4f35a1_66072009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e8af3e983706945c48a9f69aa50cf0fdaf123d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\tablaGenero.tpl',
      1 => 1602197911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7f99ea4f35a1_66072009 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Generos</h2>
<section>
    <table class="tabla">
        <thead>
            <tr>
                <th>Tipo</th>
                <th><i class="fas fa-trash-alt"></th>
                <th><i class="far fa-edit"></th>
            </tr>
        </thead>
        <tbody class="body-table">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allGeneros']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['genero']->value->tipo;?>
</td>
                    <td><button><a href="deleteGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><i class="fas fa-trash-alt"></i><button></td>
                    <td><button><a href="editarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><i class="far fa-edit"></i><button></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</section>


<?php }
}
