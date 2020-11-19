<h2>Generos</h2>
<section>
    <table class="tabla">
        <thead>
            <tr>
                <th>Tipo</th>
                {if $logeado eq true}
                <th><i class="fas fa-trash-alt"></th>
                <th><i class="far fa-edit"></th>
                {/if}
            </tr>
        </thead>
        <tbody class="body-table">
            {foreach from=$allGeneros item=genero}
                <tr>
                    <td>{$genero->tipo}</td>
                    {if $logeado eq true}
                    <td><button><a href="deleteGenero/{$genero->id_genero}"><i class="fas fa-trash-alt"></i></a><button></td>
                    <td><button><a href="formularioEditarGenero/{$genero->id_genero}"><i class="far fa-edit"></a></i><button></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
</section>


