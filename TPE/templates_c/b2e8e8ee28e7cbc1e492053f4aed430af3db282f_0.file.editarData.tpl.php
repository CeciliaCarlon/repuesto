<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 23:15:14
  from 'C:\xampp\htdocs\TPE\templates\editarData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7a3b62a2fad9_11862762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2e8e8ee28e7cbc1e492053f4aed430af3db282f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\editarData.tpl',
      1 => 1601846106,
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
function content_5f7a3b62a2fad9_11862762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="editar" method="POST">
    <div class="tabla_inputs">
        <label>Titulo</label>
        <div class="respuesta">
            <input class="editar_titulo_input" name="editar_titulo_input" type="text" placeholder="Editar Titulo">
        </div>
        <label>Descripcion</label>
        <div class="respuesta">
            <input class="editar_descripcion_input" name="editar_descripcion_input" type="text" placeholder="Editar Descripcion">
        </div>
        <label>Director/a</label>
        <div class="respuesta">
            <input class="editar_director_input" name="editar_director_input" type="text" placeholder="Editar Director/a">
        </div>
        <label>Fecha de Estreno</label>
        <div class="respuesta">
            <input class="editar_estreno_input" name="editar_estreno_input" type="text" placeholder="Editar Fecha de Estreno">
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
            <button type="submit">Editar</button>
            <button><a href="<?php echo BASE_URL;?>
home">Cancelar</button>
        </div>
    </div>
<form>   
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php }
}
