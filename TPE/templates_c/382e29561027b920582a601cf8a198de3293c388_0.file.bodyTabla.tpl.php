<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 02:26:21
  from 'C:\xampp\htdocs\TPE\templates\bodyTabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f75222d3c6612_12464901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '382e29561027b920582a601cf8a198de3293c388' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\bodyTabla.tpl',
      1 => 1601511929,
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
function content_5f75222d3c6612_12464901 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <th><i  class="fas fa-trash-alt"></i><i class="far fa-edit"></i></th>
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
                                <td><button><i  class="fas fa-trash-alt"></i><button></td>
                                <td><button><i class="far fa-edit"></i><button></td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </section>
        </article>
            
        <aside>
            <div class="tabla_inputs">
                <label>Titulo</label>
                <div class="respuesta">
                    <input class="input_titulo" type="text" placeholder="Titulo">
                </div>
                <label>Descripción</label>
                <div class="respuesta">
                    <input class="input_descripcion" type="text" placeholder="Descripcion">
                </div>
                <label>Director/a</label>
                <div class="respuesta">
                    <input class="input_director" type="text" placeholder="Director/a">
                </div>
                <label>Fecha de Estreno</label>
                <div class="respuesta">
                    <input class="input_estreno" type="number" placeholder="Estreno">
                </div>
                <label>Genero</label>
                <div class="respuesta">
                    <select name="select_genero">';
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->tipo;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn_agregar">Agregar</button>
                </div>
                <div>
                    <p>Filtrar por genero:</p>
                    <select name="select_genero" id="filtroEdad">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->tipo;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="padreInput">
                    <input class="prodId" type="text">
                </div>
            </div>
            
        </aside>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
