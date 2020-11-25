<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-23 21:56:29
  from 'C:\xampp\htdocs\TPE\templates\vue\comentarios.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbc21fd6d4595_78255194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '219f409ef0cded19959859682e9c2bd9519e4f00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\vue\\comentarios.vue',
      1 => 1606164988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbc21fd6d4595_78255194 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="vue-comentarios">
    <ul id="ulComentarios">
        <li v-for="(comentario, key) in comentarios" id="">
            {{comentario.texto}} ({{comentario.puntuacion}})
            <input type="hidden" id="idComentario" :value="comentario.id_comentario">

        <?php if ($_smarty_tpl->tpl_vars['logeado']->value->administrador) {?>
        <button id="botonEliminarComentario" @click="deleteComentario(comentario.id_comentario, comentarios, key)">Eliminar</button>
        <?php }?>
        </li>
    </ul>
</div><?php }
}
