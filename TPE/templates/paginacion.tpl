<nav aria-label="Page navigation example">
    <ul class="pagination">
        </li>
        {foreach from=$paginacion item=p}
        <li class="page-item"><a class="page-link" href="{BASE_URL}{$accion}/pagina/{$p+1}">{$p+1}</a></li>
        {/foreach}
    </ul>
</nav>