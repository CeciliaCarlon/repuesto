<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-27 00:49:55
  from 'C:\xampp\htdocs\TPE\templates\tablaGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc03f230f43c1_52378632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e8af3e983706945c48a9f69aa50cf0fdaf123d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\tablaGenero.tpl',
      1 => 1606434575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:botonera.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc03f230f43c1_52378632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h2>Generos</h2>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody class="body-table">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                <tr>
                    <td scope="row"><?php echo $_smarty_tpl->tpl_vars['genero']->value->tipo;?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['logeado']->value != null && $_smarty_tpl->tpl_vars['logeado']->value->administrador) {?>
                    <td><a type="button" href="deleteGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
" class="btn btn-light"><i class="fas fa-trash-alt"></i></a></td>
                    <td><a type="button" href="formularioEditarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
" class="btn btn-light"><i class="far fa-edit"></i></a></td>
                    <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <?php if ($_smarty_tpl->tpl_vars['logeado']->value != null && $_smarty_tpl->tpl_vars['logeado']->value->administrador) {?>
    <a type="button" href="formularioInsertarGenero" class="btn btn-light">Insertar Genero<i class="fas fa-plus"></i></a>
    <?php }
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
