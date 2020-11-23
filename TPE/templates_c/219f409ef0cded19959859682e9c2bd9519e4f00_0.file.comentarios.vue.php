<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-23 20:52:41
  from 'C:\xampp\htdocs\TPE\templates\vue\comentarios.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbc1309da78c4_36870769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '219f409ef0cded19959859682e9c2bd9519e4f00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\vue\\comentarios.vue',
      1 => 1606161160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbc1309da78c4_36870769 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="vue-comentarios">
    <ul id="ulComentarios">
        <li v-for="comentario in comentarios" id="">
            {{comentario.texto}} ({{comentario.puntuacion}})
            <input type="hidden" id="idComentario" :value="comentario.id_comentario">
            <button id="botonEliminarComentario">Eliminar</button>
        </li>
    </ul>
</div>
<?php }
}
