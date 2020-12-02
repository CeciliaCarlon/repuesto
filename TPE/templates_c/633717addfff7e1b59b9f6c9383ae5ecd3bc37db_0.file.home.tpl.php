<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 18:41:00
  from 'C:\xampp\htdocs\TPE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc52eac7902f6_80218172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '633717addfff7e1b59b9f6c9383ae5ecd3bc37db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\home.tpl',
      1 => 1606758049,
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
function content_5fc52eac7902f6_80218172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="semantica_medio">
        <article>
            <h2>Inicio</h2>
            <section>
                <div class="portadas">
                    <img class="imgHome" src="./images/portada1.jpg">
                    <img class="imgHome" src="./images/portada2.jpg">
                </div>
                <div class="portadas"> 
                    <img class="imgHome" src="./images/portada3.jpg">
                    <img class="imgHome" src="./images/portada4.jpg">
                </div>
            </section>
        </article>
        
        <aside>
            <h2 class="comentarios">Comentarios</h2>
            <div>
             <p class="p-3 mb-2 bg-danger text-white"><label class="font-weight-bold">Marcela:</label> Exelentes películas. En esta página pude encontrar todas
              mis películas favoritas y los últimos estrenos.</p> 
            </div> 
            <div>
             <p class="p-3 mb-2 bg-danger text-white"><label class="font-weight-bold">Fabricio:</label> Es fácil ingresar y la interfaz tiene una estetica increible.
              Me encanta como está todo organizado.</p>
            </div>
            <div>
             <p class="p-3 mb-2 bg-danger text-white"><label class="font-weight-bold">Francisco:</label> Muy buena calidad las películas.</p>
            </div> 
            <div>
             <p class="p-3 mb-2 bg-danger text-white"><label class="font-weight-bold">Lucrecia:</label> Muy recomendable esta página. Se la mostré a todes mis amigues y
               les encanta. No puedo parar de ver películas.</p> 
            </div>
        </aside>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
