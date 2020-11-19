<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 00:06:54
  from 'C:\xampp\htdocs\TPE\templates\registrarse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb6fa8e4286f4_59279165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b78b935a6f70b4f05385e8107b1d3f17528c91d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\registrarse.tpl',
      1 => 1605384223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:botonera.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb6fa8e4286f4_59279165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<article>
        <h2>Registrarse</h2>
        <section class="formulario">
            <form action="registrarUser" method="POST" id="formulario">
                <div class="formulario_contenido">
                    <input type="text" id="mail" name="input_email" placeholder="Mail"/>
                </div>
                <div class="formulario_contenido">
                    <input type="password" id="contraseña" name="input_contraseña" placeholder="Contraseña"/>
                </div>
                <div class="formulario_contenido">
                    <input type="password" id="contraseña" name="input_confirmacion_contraseña" placeholder="Confirmar Contraseña"/>
                </div>
                <div class="formulario_contenido">
                    <button id="enviar" type="submit">Registrarse</button>
                </div>       
             </form>
        </section>        
    </article>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
