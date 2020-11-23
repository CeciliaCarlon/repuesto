<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-23 18:16:36
  from 'C:\xampp\htdocs\TPE\templates\insertarPelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbbee7459bc90_88729624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7433803f485c95e143027fe04d5ea6cc52eb1b1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\insertarPelicula.tpl',
      1 => 1606146862,
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
function content_5fbbee7459bc90_88729624 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="insertarPelicula" method="POST">
    <div class="tabla_inputs">
        <label>Titulo</label>
        <div class="respuesta">
            <input class="input_titulo" name="input_titulo" type="text" placeholder="Titulo">
        </div>
        <label>Descripción</label>
        <div class="respuesta">
            <input class="input_descripcion" name="input_descripcion" type="text" placeholder="Descripcion">
        </div>
        <label>Director/a</label>
        <div class="respuesta">
            <input class="input_director" name="input_director" type="text" placeholder="Director/a">
        </div>
        <label>Fecha de Estreno</label>
        <div class="respuesta">
            <input class="input_estreno" name="input_estreno" type="text" placeholder="Estreno">
        </div>
        <label>Genero</label>
        <div class="respuesta">
            <select name="select_genero">';
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
            <button type="submit" class="btn_agregar">Agregar</button>
        </div>
    </div>    
</form>    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
