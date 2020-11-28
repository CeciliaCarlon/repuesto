{include file="header.tpl"}
{include file="botonera.tpl"}
<div class="soloMovieTitulo">
    <h2 class="tituloPelicula">{$pelicula->titulo}</h2>
</div>
<section class="especificacionPelicula">
    <ul class="list-group list-group-flush font-weight-bold">
        <li class="list-group-item">Descripción: {$pelicula->descripcion}</li>
        <li class="list-group-item">Director: {$pelicula->director}</li>
        <li class="list-group-item">Fecha de estreno: {$pelicula->estreno}</li>
        <li class="list-group-item">Género: {$pelicula->tipo}</li>
        {if $pelicula->imagen == null}
            <form action="insertarImagen" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" class="form-control-file list-group-item " id="exampleFormControlFile1"><button type="submit" class="btn btn-light">Subir</button>
                </div>
            </form>
        {else}
            <li class="list-group-item">{$pelicula->imagen}</li>        
        {/if}
    </ul>
</section>
{include file="comentarios.tpl"}
{include file="footer.tpl"}
