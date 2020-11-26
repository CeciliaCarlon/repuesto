<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 01:54:40
  from 'C:\xampp\htdocs\TPE\templates\editarPelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbefcd0ab8055_19643883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28cb43f8c3867e8d9b4bb734b6c70b537adebc71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\editarPelicula.tpl',
      1 => 1606352079,
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
function content_5fbefcd0ab8055_19643883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="editarPelicula/<?php echo $_smarty_tpl->tpl_vars['datosPeliculaPorEditar']->value->id_pelicula;?>
" method="POST">
    <div class="tabla_inputs">
        <div class="form-group">
            <input class="form-control" name="editar_titulo_input" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datosPeliculaPorEditar']->value->titulo;?>
" placeholder="Editar Titulo">
        </div>
        <div class="form-group">
            <input class="form-control" name="editar_descripcion_input" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datosPeliculaPorEditar']->value->descripcion;?>
" placeholder="Editar Descripcion">
        </div>
        <div class="form-group">
            <input class="form-control" name="editar_director_input" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datosPeliculaPorEditar']->value->director;?>
" placeholder="Editar Director/a">
        </div>
        <div class="form-group">
            <input class="form-control" name="editar_estreno_input" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datosPeliculaPorEditar']->value->estreno;?>
" placeholder="Editar Fecha de Estreno">
        </div>
        <label>Genero</label>
        <div class="input-group mb-3">
            <select name="editar_genero_select" class="custom-select" id="inputGroupSelect01">';
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->tipo;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-light">Editar</button>
            <a type="button" class="btn btn-light" href="<?php echo BASE_URL;?>
peliculas">Cancelar</a>
        </div>
    </div>
<form>   
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
