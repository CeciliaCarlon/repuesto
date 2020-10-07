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
                                <td><button><a href="delete/{$pelicula->id_pelicula}"><i class="fas fa-trash-alt"></i><button></td>
                                <td><button><a href="editar/{$pelicula->id_pelicula}"><i class="far fa-edit"></i><button></td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </section>
        </article>
        <aside>
            <form action="formularioInsertarPelicula" method="GET">
                <button >Insertar Pelicula <i class="fas fa-plus"></i></button>
            </form>
            {include file="filtro.tpl"}
        </aside>
    </div>
{include file="footer.tpl"}