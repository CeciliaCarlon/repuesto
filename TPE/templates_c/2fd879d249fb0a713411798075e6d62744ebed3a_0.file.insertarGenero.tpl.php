<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 18:25:53
  from 'C:\xampp\htdocs\TPE\templates\insertarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc52b212753f7_66875017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fd879d249fb0a713411798075e6d62744ebed3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\insertarGenero.tpl',
      1 => 1606757151,
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
function content_5fc52b212753f7_66875017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="insertarGenero" method="POST">
    <div class="tabla_inputs">
        <div class="form-group">
            <input class="form-control" name="input_tipo" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Tipo">
        </div>
        <div>
            <button type="submit" class="btn btn-light">Agregar</a></button>
        </div>
    </div>    
</form>    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
