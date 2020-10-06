<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 18:08:05
  from 'C:\xampp\htdocs\TPE\templates\insertarData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7750653822f2_24795207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f55f44296302ab9e6e2111a1effa6c441eddc0c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\insertarData.tpl',
      1 => 1601654883,
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
function content_5f7750653822f2_24795207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="insertar" method="POST">
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
                    <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
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
