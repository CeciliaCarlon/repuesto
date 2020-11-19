{include file="header.tpl"}
{include file="botonera.tpl"}
<div class="soloMovieTitulo">
    <h2 class="tituloPelicula">{$pelicula->titulo}</h2>
</div>
<section class="especificacionPelicula">
    <div class="formulario_contenido">
        <h4>Descripción: {$pelicula->descripcion}</h4>
    </div>
    <div class="formulario_contenido">
        <h4>Director: {$pelicula->director}</h4>
    </div>
    <div class="formulario_contenido">
        <h4>Fecha de estreno: {$pelicula->estreno}</h4>
    </div>
    <div class="formulario_contenido">
        <h4>Género: {$pelicula->tipo}</h4>
    </div>
</section>
{include file="comentarios.tpl"}
{include file="footer.tpl"}