<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 04:24:01
  from 'C:\xampp\htdocs\TPE\templates\soloPagePelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7e78414e7d56_71433335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8595a14231d988b5a3ac2ad9439c0679b89d8e5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\soloPagePelicula.tpl',
      1 => 1602123836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:botoneraUsuario.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7e78414e7d56_71433335 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botoneraUsuario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="especificacionPelicula">
    <h2 class="tituloPelicula"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->titulo;?>
</h2>
    <h2>Argumento</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->descripcion;?>
</p>
    <h2>Director</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->director;?>
</p>
    <h2>Fecha de estreno</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->estreno;?>
</p>
    <h2>Genero</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->tipo;?>
</p>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
