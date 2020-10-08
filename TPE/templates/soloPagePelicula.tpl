{include file="header.tpl"}
{include file="botoneraUsuario.tpl"}
<div class="especificacionPelicula">
    <h2 class="tituloPelicula">{$pelicula->titulo}</h2>
    <h2>Argumento</h2>
    <p>{$pelicula->descripcion}</p>
    <h2>Director</h2>
    <p>{$pelicula->director}</p>
    <h2>Fecha de estreno</h2>
    <p>{$pelicula->estreno}</p>
    <h2>Genero</h2>
    <p>{$pelicula->tipo}</p>
</div>
{include file="footer.tpl"}