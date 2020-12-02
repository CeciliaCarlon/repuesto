{include file="header.tpl"}
{include file="botonera.tpl"}
<div class="semantica_medio">
        <article>
            <h2>Usuarios</h2>
            <section>
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Mail</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody class="body-table">
                        {foreach from=$usuarios item=usuario}
                            <tr>
                                <td scope="row">{$usuario->email}</td>
                                {if $usuario->administrador eq false}
                                <td>Usuario</td>
                                {else}
                                <td>Administrador</td>
                                {/if}
                                {if $usuario->email !== $logeado->email}
                                    <td><a type="button" href="deleteUsuario/{$usuario->id_usuario}" class="btn btn-light"><i class="fas fa-trash-alt"></i></a></td>
                                    {if $usuario->administrador eq false}
                                    <td><a type="button" href="establecerAdmin/{$usuario->id_usuario}" class="btn btn-light"><i class="fas fa-user-cog"></i></i></a></td>
                                    {else}
                                    <td><a type="button" href="quitarAdmin/{$usuario->id_usuario}" class="btn btn-light"><i class="fas fa-ban"></i></a></td>
                                    {/if}
                                {/if}
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </section>
        </article>
    </div>
{include file="footer.tpl"}
