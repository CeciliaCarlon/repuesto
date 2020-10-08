<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 02:47:00
  from 'C:\xampp\htdocs\TPE\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7e6184968031_50050126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a96e44dba89a207b8f35fff6e056afb5d7ffc4b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\error.tpl',
      1 => 1601921156,
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
function content_5f7e6184968031_50050126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h2>
<form action="tabla" method="GET">
    <button ><i class="fas fa-arrow-left"></i><a href="javascript: history.go(-1)">Volver</a></button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
