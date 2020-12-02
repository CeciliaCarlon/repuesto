<aside>
    <div class="dropdown show">
    <a class="btn btn-secondary dropdown-toggle btn btn-danger" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Filtrar
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        {foreach from=$allGeneros item=genero};
            <a class="dropdown-item" href="filtrarPelicula/{$genero->id_genero}/pagina/1">{$genero->tipo}</a>
        {/foreach}
    </div>
    <a type="button" class="btn btn-light" href="{BASE_URL}peliculas/pagina/1">Mostrar Todas</a>
    </div>
</aside>

