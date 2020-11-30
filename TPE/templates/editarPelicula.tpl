{include file="header.tpl"}
{include file="botonera.tpl"}
<form action="editarPelicula/{$datosPeliculaPorEditar->id_pelicula}" method="POST" enctype="multipart/form-data">
    <div class="tabla_inputs">
        <div class="form-group">
            <input class="form-control" name="editar_titulo_input" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" value="{$datosPeliculaPorEditar->titulo}" placeholder="Editar Titulo">
        </div>
        <div class="form-group">
            <input class="form-control" name="editar_descripcion_input" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" value="{$datosPeliculaPorEditar->descripcion}" placeholder="Editar Descripcion">
        </div>
        <div class="form-group">
            <input class="form-control" name="editar_director_input" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" value="{$datosPeliculaPorEditar->director}" placeholder="Editar Director/a">
        </div>
        <div class="form-group">
            <input class="form-control" name="editar_estreno_input" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" value="{$datosPeliculaPorEditar->estreno}" placeholder="Editar Fecha de Estreno">
        </div>
        <label>Genero</label>
        <div class="input-group mb-3">
            <select name="editar_genero_select" class="custom-select" id="inputGroupSelect01">';
                {foreach from=$generos item=genero}
                    <option value="{$genero->id_genero}">{$genero->tipo}</option>
                {/foreach}
            </select>
        </div>
        {if $datosPeliculaPorEditar->imagen!==null}
            <a type="button" class="btn btn-light" href="deleteImagen/{$datosPeliculaPorEditar->id_pelicula}">Eliminar Imagen<i class="fas fa-trash-alt"></i></a>
        {/if}
        <div class="form-group">
            <label>Reemplazar Imagen</label>
            <input type="file" class="form-control-file" name="editar_imagen_input" id="exampleFormControlFile1">
        </div>
        <div>
            <button type="submit" class="btn btn-light">Editar</button>
            <a type="button" class="btn btn-light" href="{BASE_URL}peliculas/pagina/1">Cancelar</a>
        </div>
    </div>
<form>   
{include file="footer.tpl"}

