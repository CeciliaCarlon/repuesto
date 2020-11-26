<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 01:56:41
  from 'C:\xampp\htdocs\TPE\templates\soloPagePelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbefd49b60aa1_49073668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8595a14231d988b5a3ac2ad9439c0679b89d8e5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\soloPagePelicula.tpl',
      1 => 1606334218,
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
function content_5fbefd49b60aa1_49073668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="soloMovieTitulo">
    <h2 class="tituloPelicula"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->titulo;?>
</h2>
</div>
<section class="especificacionPelicula">
    <ul class="list-group list-group-flush font-weight-bold">
        <li class="list-group-item">Descripción: <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->descripcion;?>
</li>
        <li class="list-group-item">Director: <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->director;?>
</li>
        <li class="list-group-item">Fecha de estreno: <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->estreno;?>
</li>
        <li class="list-group-item">Género: <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->tipo;?>
</li>
    </ul>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
