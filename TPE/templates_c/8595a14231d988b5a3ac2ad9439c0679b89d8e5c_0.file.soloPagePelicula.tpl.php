<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 17:37:19
  from 'C:\xampp\htdocs\TPE\templates\soloPagePelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb69f3fc4f038_19019272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8595a14231d988b5a3ac2ad9439c0679b89d8e5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\soloPagePelicula.tpl',
      1 => 1605800920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:botonera.tpl' => 1,
    'file:comentarios.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb69f3fc4f038_19019272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="soloMovieTitulo">
    <h2 class="tituloPelicula"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->titulo;?>
</h2>
</div>
<section class="especificacionPelicula">
    <div class="formulario_contenido">
        <h4>Descripción: <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->descripcion;?>
</h4>
    </div>
    <div class="formulario_contenido">
        <h4>Director: <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->director;?>
</h4>
    </div>
    <div class="formulario_contenido">
        <h4>Fecha de estreno: <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->estreno;?>
</h4>
    </div>
    <div class="formulario_contenido">
        <h4>Género: <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->tipo;?>
</h4>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
