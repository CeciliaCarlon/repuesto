<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 00:27:12
  from 'C:\xampp\htdocs\TPE\templates\filtro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc822d0d411a8_42959520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbdabc26c8875d03b00ff0f28501131f2d2e6c32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\filtro.tpl',
      1 => 1606951631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc822d0d411a8_42959520 (Smarty_Internal_Template $_smarty_tpl) {
?><aside>
    <div class="dropdown show">
    <a class="btn btn-secondary dropdown-toggle btn btn-danger" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Filtrar
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allGeneros']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
            <a class="dropdown-item" href="filtrarPelicula/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
/pagina/1"><?php echo $_smarty_tpl->tpl_vars['genero']->value->tipo;?>
</a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <a type="button" class="btn btn-light" href="<?php echo BASE_URL;?>
peliculas/pagina/1">Mostrar Todas</a>
    </div>
</aside>

<?php }
}
