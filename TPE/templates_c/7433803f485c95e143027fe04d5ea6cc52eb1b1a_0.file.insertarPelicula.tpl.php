<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-25 23:55:47
  from 'C:\xampp\htdocs\TPE\templates\insertarPelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbee0f39720e1_80262561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7433803f485c95e143027fe04d5ea6cc52eb1b1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\insertarPelicula.tpl',
      1 => 1606332025,
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
function content_5fbee0f39720e1_80262561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="insertarPelicula" method="POST">
    <div class="tabla_inputs">
        <div class="form-group">
            <input class="form-control" name="input_titulo" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Titulo">
        </div>
        <div class="form-group">
            <input class="form-control" name="input_descripcion" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Descripción">
        </div>
        <div class="form-group">
            <input class="form-control" name="input_director" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Director/a">
        </div>
        <div class="form-group">
            <input class="form-control" name="input_estreno" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Estreno">
        </div>
        <label>Genero</label>
        <div class="input-group mb-3">
            <select name="select_genero" class="custom-select" id="inputGroupSelect01">';
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
            <button type="submit" class="btn btn-light">Agregar</button>
        </div>
    </div>    
</form>    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
