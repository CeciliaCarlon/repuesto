<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 20:20:59
  from 'C:\xampp\htdocs\TPE\templates\botonera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f80aa0b9ed332_52952657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8253b32171b807d62a571b416a0b79961949c52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\botonera.tpl',
      1 => 1602267649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80aa0b9ed332_52952657 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <h1>MABREX</h1>
    <nav>
        <button class="btn_menu">Menu</button>
        <ul class="botonera">
            <li><a class="boton" href="home">Inicio</a></li>
            <li><a class="boton" href="tabla">Tabla</a></li>
            <?php if ($_smarty_tpl->tpl_vars['logeado']->value) {?>
            <li><a class="boton" href="logout">Cerrar Sesion</a></li>
            <?php } else { ?>
            <li><a class="boton" href="login">Iniciar Sesion</a></li>
            <?php }?>
        </ul>
    </nav>
</header><?php }
}
