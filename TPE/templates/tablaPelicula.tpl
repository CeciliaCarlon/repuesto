{include file="header.tpl"}
{include file="botoneraUsuario.tpl"}
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
                            <th><i  class="fas fa-trash-alt"></i></th>
                            <th><i class="far fa-edit"></i></th>
                        </tr>
                    </thead>
                    <tbody class="body-table">
                        {foreach from=$peliculas item=pelicula}
                            <tr>
                                <td>{$pelicula->titulo}</td>
                                <td>{$pelicula->descripcion}</td>
                                <td>{$pelicula->director}</td>
                                <td>{$pelicula->estreno}</td>
                                <td>{$pelicula->tipo}</td>
                                <td><button><a href="verMasPelicula/{$pelicula->id_pelicula}"><i class="fas fa-plus-circle"></i></a><button></td>
                                <td><button><a href="deletePelicula/{$pelicula->id_pelicula}"><i class="fas fa-trash-alt"></i></a><button></td>
                                <td><button><a href="formularioEditarPelicula/{$pelicula->id_pelicula}"><i class="far fa-edit"></i></a><button></td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </section>
            {include file="tablaGenero.tpl"}
        </article>
        <aside>
            {include file="filtro.tpl"}
            <form action="formularioInsertarPelicula" method="GET">
                <button >Insertar Pelicula <i class="fas fa-plus"></i></button>
            </form>
            <form action="formularioInsertarGenero" method="GET">
                <button >Insertar Genero<i class="fas fa-plus"></i></button>
            </form>
        </aside>
    </div>
{include file="footer.tpl"}