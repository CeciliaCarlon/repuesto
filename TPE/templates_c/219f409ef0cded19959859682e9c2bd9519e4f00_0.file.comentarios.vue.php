<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 01:56:41
  from 'C:\xampp\htdocs\TPE\templates\vue\comentarios.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbefd49bea962_87855958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '219f409ef0cded19959859682e9c2bd9519e4f00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\vue\\comentarios.vue',
      1 => 1606342241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbefd49bea962_87855958 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="vue-comentarios">
    <h2 class="comentarios">Comentarios</h2>
    <ul id="ulComentarios">
        <li v-for="comentario in comentarios" class="p-3 mb-2 bg-danger">
            <h3>{{comentario.texto}}</h3> 
            <small id="emailHelp" class="form-text">PUNTUACION: {{comentario.puntuacion}}</small>
            <input type="hidden" id="idComentario" :value="comentario.id_comentario">

        <?php if ($_smarty_tpl->tpl_vars['logeado']->value != null && $_smarty_tpl->tpl_vars['logeado']->value->administrador) {?>
        <button id="botonEliminarComentario" class="btn btn-outline-light" @click="deleteComentario(comentario.id_comentario)">Eliminar Comentario</button>
        <?php }?>
        </li>
    </ul>
</div>

<?php }
}
