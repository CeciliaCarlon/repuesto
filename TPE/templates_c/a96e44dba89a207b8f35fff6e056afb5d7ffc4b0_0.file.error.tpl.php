<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 02:14:26
  from 'C:\xampp\htdocs\TPE\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc83bf26e8c17_73278970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a96e44dba89a207b8f35fff6e056afb5d7ffc4b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\error.tpl',
      1 => 1606955014,
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
function content_5fc83bf26e8c17_73278970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h2><a type="button" class="btn btn-outline-light" href="javascript: history.go(-1)" 
    <i class="fas fa-arrow-left"></i>Volver</a>  <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h2> 
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
