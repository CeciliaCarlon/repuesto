{include file="header.tpl"}
{include file="botonera.tpl"}
    <h2>Generos</h2>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody class="body-table">
            {foreach from=$generos item=genero}
                <tr>
                    <td scope="row">{$genero->tipo}</td>
                    {if $logeado neq null && $logeado->administrador}
                    <td><a type="button" href="deleteGenero/{$genero->id_genero}" class="btn btn-light"><i class="fas fa-trash-alt"></i></a></td>
                    <td><a type="button" href="formularioEditarGenero/{$genero->id_genero}" class="btn btn-light"><i class="far fa-edit"></i></a></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
    {if $logeado neq null && $logeado->administrador}
    <a type="button" href="formularioInsertarGenero" class="btn btn-light">Insertar Genero<i class="fas fa-plus"></i></a>
    {/if}
{include file="footer.tpl"}
