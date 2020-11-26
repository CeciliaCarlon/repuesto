{include file="header.tpl"}
{include file="botonera.tpl"}
<form action="editarPelicula/{$datosPeliculaPorEditar->id_pelicula}" method="POST">
    <div class="tabla_inputs">
        <label>Titulo</label>
            <div class="respuesta">
                <input class="editar_titulo_input" name="editar_titulo_input" type="text" value="{$datosPeliculaPorEditar->titulo}" placeholder="Editar Titulo">
            </div>
            <label>Descripcion</label>
            <div class="respuesta">
                <input class="editar_descripcion_input" name="editar_descripcion_input" type="text" value="{$datosPeliculaPorEditar->descripcion}" placeholder="Editar Descripcion">
            </div>
            <label>Director/a</label>
            <div class="respuesta">
                <input class="editar_director_input" name="editar_director_input" type="text" value="{$datosPeliculaPorEditar->director}" placeholder="Editar Director/a">
            </div>
            <label>Fecha de Estreno</label>
            <div class="respuesta">
                <input class="editar_estreno_input" name="editar_estreno_input" type="text" value="{$datosPeliculaPorEditar->estreno}" placeholder="Editar Fecha de Estreno">
            </div>    
            <label>Genero</label>
            <div class="respuesta">
                <select name="editar_genero_select">';
                    {foreach from=$generos item=genero}
                        <option value="{$genero->id_genero}">{$genero->tipo}</option>
                    {/foreach}
                </select>
            </div>
        <div>
            <button type="submit">Editar</button>
            <button><a href="{BASE_URL}tabla">Cancelar</a></button>
        </div>
    </div>
<form>   
{include file="footer.tpl"}
<div class="tabla_inputs">
        <div class="form-group">
            <input class="form-control" name="input_titulo" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Titulo">
        </div>
        <div class="form-group">
            <input class="form-control" name="input_descripcion" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Descripción">
        </div>
        <div class="form-group">
            <input class="form-control" name="input_director" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Director/a">
        </div>
        <div class="form-group">
            <input class="form-control" name="input_estreno" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Estreno">
        </div>
        <label>Genero</label>
        <div class="input-group mb-3">
            <select name="select_genero" class="custom-select" id="inputGroupSelect01">';
                {foreach from=$generos item=genero}
                    <option value="{$genero->id_genero}">{$genero->tipo}</option>
                {/foreach}
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-light">Agregar</button>
        </div>
    </div>
