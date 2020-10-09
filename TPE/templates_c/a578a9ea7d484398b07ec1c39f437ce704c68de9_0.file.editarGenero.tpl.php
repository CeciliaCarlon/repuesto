<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 22:45:08
  from 'C:\xampp\htdocs\TPE\templates\editarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f80cbd4242b83_84375877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a578a9ea7d484398b07ec1c39f437ce704c68de9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\editarGenero.tpl',
      1 => 1602275866,
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
function content_5f80cbd4242b83_84375877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="editarGenero/<?php echo $_smarty_tpl->tpl_vars['datosGeneroPorEditar']->value->id;?>
" method="POST">
    <div class="tabla_input">
        <label>Tipo</label>
            <div class="respuesta">
                <input class="editar_genero_input" name="editar_genero_input" type="text"
                 value="<?php echo $_smarty_tpl->tpl_vars['datosGeneroPorEditar']->value->tipo;?>
" placeholder="Editar Genero">
            </div>
            <button type="submit">Editar</button>
            <button><a href="<?php echo BASE_URL;?>
tabla">Cancelar</button>
     </div> 
<form>   
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
