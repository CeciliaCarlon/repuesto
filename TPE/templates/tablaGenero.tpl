<h2>Generos</h2>
<section>
    <table class="tabla">
        <thead>
            <tr>
                <th>Tipo</th>
                <th><i class="fas fa-trash-alt"></th>
                <th><i class="far fa-edit"></th>
            </tr>
        </thead>
        <tbody class="body-table">
            {foreach from=$allGeneros item=genero}
                <tr>
                    <td>{$genero->tipo}</td>
                    <td><button><a href="deleteGenero/{$genero->id}"><i class="fas fa-trash-alt"></i><button></td>
                    <td><button><a href="editarGenero/{$genero->id}"><i class="far fa-edit"></i><button></td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</section>


