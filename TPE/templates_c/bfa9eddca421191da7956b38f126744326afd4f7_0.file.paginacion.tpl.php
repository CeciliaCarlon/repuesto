<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 21:16:54
  from 'C:\xampp\htdocs\TPE\templates\paginacion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc6a4b6bb2982_70196216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfa9eddca421191da7956b38f126744326afd4f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\paginacion.tpl',
      1 => 1606853777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc6a4b6bb2982_70196216 (Smarty_Internal_Template $_smarty_tpl) {
?><nav aria-label="Page navigation example">
    <ul class="pagination">
        </li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginacion']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
        <li class="page-item"><a class="page-link" href="<?php echo BASE_URL;
echo $_smarty_tpl->tpl_vars['accion']->value;?>
/pagina/<?php echo $_smarty_tpl->tpl_vars['p']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value+1;?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</nav><?php }
}
