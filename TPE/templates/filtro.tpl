<aside>
    <div>
        <p>Filtrar por genero:</p>
        <select name="select_genero">
            <option type="submit" value=""><a href="tabla">Todas</option>
            {foreach from=$generos item=genero}
                <option type="submit" value="{$genero->id}"><a href="filtrar/{$genero->id}">{$genero->tipo}</option>
            {/foreach}
        </select>
    </div>
</aside>