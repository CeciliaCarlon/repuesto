<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 01:20:44
  from 'C:\xampp\htdocs\TPE\templates\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc82f5cecf511_10847107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6227aa92e16ab44af23784dd2a4c8d82db052431' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\comentarios.tpl',
      1 => 1606954843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:vue/comentarios.vue' => 1,
  ),
),false)) {
function content_5fc82f5cecf511_10847107 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contenedorComentarios">
<input type="hidden" id="idPelicula" value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id_pelicula;?>
">
<?php if ($_smarty_tpl->tpl_vars['logeado']->value) {?>
<section class="formularioComentarios border border-white">
    <form method="POST" id="insertarComentario" class="mx-auto">
        <div class="formulario_contenido">
            <h4 class="p-3 mb-2 bg-danger">Deja tu comentario</h4>
            <textarea id="comentario" name="input_comentario" placeholder="Comentario" rows="4" cols="50"></textarea>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Puntuacion</label>
                </div>
                <select class="custom-select" id="selectPuntuacion">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
        <input type="hidden" id="idUsuario" value="<?php echo $_smarty_tpl->tpl_vars['logeado']->value->id_usuario;?>
">
        <div class="formulario_contenido">
            <button class="btn btn-light" id="enviar" type="submit">Deja tu comentario</button>
        </div>       
     </form>
</section>   
<?php }?>
<div class="comentariosSoloPage">
    <?php $_smarty_tpl->_subTemplateRender("file:vue/comentarios.vue", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
</div>
<?php echo '<script'; ?>
 src="js/comentarios.js"><?php echo '</script'; ?>
>
            <?php }
}
