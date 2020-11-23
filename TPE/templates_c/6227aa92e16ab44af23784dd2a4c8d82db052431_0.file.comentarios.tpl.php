<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-23 18:21:10
  from 'C:\xampp\htdocs\TPE\templates\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbbef86e89a50_50148925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6227aa92e16ab44af23784dd2a4c8d82db052431' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\comentarios.tpl',
      1 => 1606152069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbbef86e89a50_50148925 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contenedorComentarios">
<input type="hidden" id="idPelicula" value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id_pelicula;?>
">
<?php if ($_smarty_tpl->tpl_vars['logeado']->value) {?>
<section class="formularioComentarios">
    <form method="POST" id="insertarComentario">
        <div class="formulario_contenido">
            <h4>Deja tu comentario</h4>
            <textarea id="comentario" name="input_comentario" placeholder="Comentario"></textarea>
        </div>
        <div class="formulario_contenido">
            <p>Puntuacion</p>
            <select id="selectPuntuacion" name="selectPuntuacion">';
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
        </div>
        <input type="hidden" id="idUsuario" value="<?php echo $_smarty_tpl->tpl_vars['logeado']->value->id_usuario;?>
">
        <div class="formulario_contenido">
            <button id="enviar" type="submit">Comentar</button>
        </div>       
     </form>
</section>   
<?php }?>
<div class="comentariosSoloPage">
    <h2 class="comentarios">Comentarios</h2>
    <ul id="ulComentarios">

    </ul>
</div>
</div>
<?php echo '<script'; ?>
 src="js/comentarios.js"><?php echo '</script'; ?>
><?php }
}
