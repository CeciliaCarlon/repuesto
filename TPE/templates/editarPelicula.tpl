{include file="header.tpl"}
{include file="botonera.tpl"}
<form action="updateTablaPeliculas/{$datosPeliculaPorEditar->id_pelicula}" method="POST">
    <div class="tabla_inputs">
        <label>Titulo</label>
        {foreach from=$datosPeliculaPorEditar item=pelicula}
            <div class="respuesta">
                <input class="editar_titulo_input" name="editar_titulo_input" type="text" value="{$pelicula->titulo}" placeholder="Editar Titulo">
            </div>
            <label>Descripcion</label>
            <div class="respuesta">
                <input class="editar_descripcion_input" name="editar_descripcion_input" type="text" value="{$pelicula->descripcion}" placeholder="Editar Descripcion">
            </div>
            <label>Director/a</label>
            <div class="respuesta">
                <input class="editar_director_input" name="editar_director_input" type="text" value="{$pelicula->director}" placeholder="Editar Director/a">
            </div>
            <label>Fecha de Estreno</label>
            <div class="respuesta">
                <input class="editar_estreno_input" name="editar_estreno_input" type="text" value="{$pelicula->estreno}" placeholder="Editar Fecha de Estreno">
            </div>    
            <label>Genero</label>
            <p>Genero de la pelicula: {$pelicula->tipo}</p>
            <div class="respuesta">
                <select name="editar_genero_select">';
                    {foreach from=$generos item=genero}
                        <option value="{$genero->id}">{$genero->tipo}</option>
                    {/foreach}
                </select>
            </div>
        {/foreach}
        <div>
            <button type="submit">Editar</button>
            <button><a href="{BASE_URL}tabla">Cancelar</button>
        </div>
    </div>
<form>   
{include file="footer.tpl"}
