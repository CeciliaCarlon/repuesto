<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-23 17:30:58
  from 'C:\xampp\htdocs\TPE\templates\tablaPelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbbe3c2c41541_68697150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da7781c6c0d7a169aa428c0ea1d35e6773aa907f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\tablaPelicula.tpl',
      1 => 1606149054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:botonera.tpl' => 1,
    'file:tablaGenero.tpl' => 1,
    'file:filtro.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbbe3c2c41541_68697150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="semantica_medio">
        <article>
            <h2>Peliculas</h2>
            <section>
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Director/a</th>
                            <th>Estreno</th>
                            <th>Genero</th>
                            <th><i class="fas fa-plus-circle"></i></th>
                            <?php if ($_smarty_tpl->tpl_vars['logeado']->value != null && $_smarty_tpl->tpl_vars['logeado']->value->administrador) {?>
                            <th><i  class="fas fa-trash-alt"></i></th>
                            <th><i class="far fa-edit"></i></th>
                            <?php }?>
                        </tr>
                    </thead>
                    <tbody class="body-table">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula');
$_smarty_tpl->tpl_vars['pelicula']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
$_smarty_tpl->tpl_vars['pelicula']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->titulo;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->descripcion;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->director;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->estreno;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->tipo;?>
</td>
                                <td><button><a href="verMasPelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id_pelicula;?>
"><i class="fas fa-plus-circle"></i></a><button></td>
                                <?php if ($_smarty_tpl->tpl_vars['logeado']->value != null && $_smarty_tpl->tpl_vars['logeado']->value->administrador) {?>
                                <td><button><a href="deletePelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id_pelicula;?>
"><i class="fas fa-trash-alt"></i></a><button></td>
                                <td><button><a href="formularioEditarPelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id_pelicula;?>
"><i class="far fa-edit"></i></a><button></td>
                                <?php }?>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </section>
            <?php $_smarty_tpl->_subTemplateRender("file:tablaGenero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </article>
        <aside>
            <?php $_smarty_tpl->_subTemplateRender("file:filtro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php if ($_smarty_tpl->tpl_vars['logeado']->value != null && $_smarty_tpl->tpl_vars['logeado']->value->administrador) {?>
            <form action="formularioInsertarPelicula" method="GET">
                <button >Insertar Pelicula <i class="fas fa-plus"></i></button>
            </form>
            <form action="formularioInsertarGenero" method="GET">
                <button >Insertar Genero<i class="fas fa-plus"></i></button>
            </form>
            <?php }?>
        </aside>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
