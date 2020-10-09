<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 22:45:05
  from 'C:\xampp\htdocs\TPE\templates\tablaGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f80cbd1a97926_14520470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e8af3e983706945c48a9f69aa50cf0fdaf123d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\tablaGenero.tpl',
      1 => 1602276269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80cbd1a97926_14520470 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Generos</h2>
<section>
    <table class="tabla">
        <thead>
            <tr>
                <th>Tipo</th>
                <?php if ($_smarty_tpl->tpl_vars['logeado']->value) {?>
                <th><i class="fas fa-trash-alt"></th>
                <th><i class="far fa-edit"></th>
                <?php }?>
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
                    <?php if ($_smarty_tpl->tpl_vars['logeado']->value) {?>
                    <td><button><a href="deleteGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><i class="fas fa-trash-alt"></i><button></td>
                    <td><button><a href="formularioEditarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><i class="far fa-edit"></i><button></td>
                    <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</section>


<?php }
}
