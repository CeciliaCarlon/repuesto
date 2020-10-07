<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 02:51:16
  from 'C:\xampp\htdocs\TPE\templates\editarPelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7d11047c6988_11296661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28cb43f8c3867e8d9b4bb734b6c70b537adebc71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\editarPelicula.tpl',
      1 => 1602031870,
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
function content_5f7d11047c6988_11296661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="updateTablaPeliculas/<?php echo $_smarty_tpl->tpl_vars['datosPeliculaPorEditar']->value->id_pelicula;?>
" method="POST">
    <div class="tabla_inputs">
        <label>Titulo</label>
            <div class="respuesta">
                <input class="editar_titulo_input" name="editar_titulo_input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datosPeliculaPorEditar']->value->titulo;?>
" placeholder="Editar Titulo">
            </div>
            <label>Descripcion</label>
            <div class="respuesta">
                <input class="editar_descripcion_input" name="editar_descripcion_input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datosPeliculaPorEditar']->value->descripcion;?>
" placeholder="Editar Descripcion">
            </div>
            <label>Director/a</label>
            <div class="respuesta">
                <input class="editar_director_input" name="editar_director_input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datosPeliculaPorEditar']->value->director;?>
" placeholder="Editar Director/a">
            </div>
            <label>Fecha de Estreno</label>
            <div class="respuesta">
                <input class="editar_estreno_input" name="editar_estreno_input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datosPeliculaPorEditar']->value->estreno;?>
" placeholder="Editar Fecha de Estreno">
            </div>    
            <label>Genero</label>
            <div class="respuesta">
                <select name="editar_genero_select">';
                    <option value="">Genero</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->tipo;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        <div>
            <button type="submit">Editar</button>
            <button><a href="<?php echo BASE_URL;?>
tabla">Cancelar</button>
        </div>
    </div>
<form>   
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
