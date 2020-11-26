<aside>
    <div>
        <form action="filtrarPelicula" method="POST">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Filtrar por géneros</label>
                </div>
                <select name="select_genero" class="custom-select" id="inputGroupSelect01">
                    {foreach from=$allGeneros item=genero};
                        <option value="{$genero->id_genero}">{$genero->tipo}</option>
                    {/foreach}
                </select>
            </div>
        <button class="btn btn-light" type="submit">Filtrar</button>
        <a type="button" class="btn btn-light" href="{BASE_URL}tabla">Mostrar Todas</a>
        </form>
    </div>
</aside>
