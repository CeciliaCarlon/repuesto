<aside>
    <div>
        <p>Filtrar por genero:</p>
        <select name="select_genero">
            {foreach from=$generos item=genero}
                <option <a href="filtrar/{$genero->id}>{$genero->tipo}</option>
            {/foreach}
        </select>
    </div>
</aside>