<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 01:56:34
  from 'C:\xampp\htdocs\TPE\templates\filtro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbefd42cbf564_57849947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbdabc26c8875d03b00ff0f28501131f2d2e6c32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\filtro.tpl',
      1 => 1606352192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbefd42cbf564_57849947 (Smarty_Internal_Template $_smarty_tpl) {
?><aside>
    <div>
        <form action="filtrarPelicula" method="POST">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Filtrar por géneros</label>
                </div>
                <select name="select_genero" class="custom-select" id="inputGroupSelect01">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allGeneros']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>;
                        <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->tipo;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        <button class="btn btn-light" type="submit">Filtrar</button>
        <a type="button" class="btn btn-light" href="<?php echo BASE_URL;?>
peliculas">Mostrar Todas</a>
        </form>
    </div>
</aside>
<?php }
}
