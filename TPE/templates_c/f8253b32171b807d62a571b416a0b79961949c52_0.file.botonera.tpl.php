<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 01:58:22
  from 'C:\xampp\htdocs\TPE\templates\botonera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc1a0ae2eb018_55023708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8253b32171b807d62a571b416a0b79961949c52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\botonera.tpl',
      1 => 1606525100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc1a0ae2eb018_55023708 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h1 class="navbar-brand">MABREX</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link active" href="home">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="peliculas/1">Peliculas</a>
        <a class="nav-link" href="generos">Géneros</a>
        <?php if ($_smarty_tpl->tpl_vars['logeado']->value != null) {?>
            <?php if ($_smarty_tpl->tpl_vars['logeado']->value->administrador) {?>
            <a class="nav-link" href="usuarios">Usuarios</a>
            <?php }?>
        <a class="nav-link" href="logout">Cerrar Sesion</a>
        <?php } else { ?>
        <a class="nav-link" href="login">Iniciar Sesion</a>
        <?php }?>
        </div>
    </div>
    </nav>
</header>
<?php }
}
