<h2>Generos</h2>
<section>
    <table class="tabla">
        <thead>
            <tr>
                <th>Tipo</th>
                {if $logeado}
                <th><i class="fas fa-trash-alt"></th>
                <th><i class="far fa-edit"></th>
                {/if}
            </tr>
        </thead>
        <tbody class="body-table">
            {foreach from=$allGeneros item=genero}
                <tr>
                    <td>{$genero->tipo}</td>
                    {if $logeado}
                    <td><button><a href="deleteGenero/{$genero->id}"><i class="fas fa-trash-alt"></i></a><button></td>
                    <td><button><a href="formularioEditarGenero/{$genero->id}"><i class="far fa-edit"></a></i><button></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</section>


