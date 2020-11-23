<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-23 17:29:48
  from 'C:\xampp\htdocs\TPE\templates\tablaUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbbe37cd60fa3_67891487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4ce4eee144f39a52e3413a31bd66902725c54bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\tablaUsuarios.tpl',
      1 => 1606148902,
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
function content_5fbbe37cd60fa3_67891487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="semantica_medio">
        <article>
            <h2>Usuarios</h2>
            <section>
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Mail</th>
                            <th>Estado</th>
                            <?php if ($_smarty_tpl->tpl_vars['logeado']->value == true) {?>
                            <th><i  class="fas fa-trash-alt"></i></th>
                            <th><i class="fas fa-user-cog"></i></th>
                            <?php }?>
                        </tr>
                    </thead>
                    <tbody class="body-table">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
</td>
                                <?php if ($_smarty_tpl->tpl_vars['usuario']->value->administrador == false) {?>
                                <td>Usuario</td>
                                <?php } else { ?>
                                <td>Administrador</td>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['logeado']->value->administrador) {?>
                                <td><button><a href="deleteUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><i class="fas fa-trash-alt"></i></a><button></td>
                                    <?php if ($_smarty_tpl->tpl_vars['usuario']->value->administrador == false) {?>
                                    <td><button><a href="establecerAdmin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><i class="fas fa-user-cog"></i></a><button></td>
                                    <?php } else { ?>
                                    <td><button><a href="quitarAdmin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><i class="fas fa-ban"></i></a><button></td>
                                    <?php }?>
                                <?php }?>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </section>
        </article>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
