{include file="header.tpl"}
{include file="botonera.tpl"}
<div class="semantica_medio">
        <article>
            <h2>Usuarios</h2>
            <section>
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Mail</th>
                            <th>Estado</th>
                            {if $logeado eq true}
                            <th><i  class="fas fa-trash-alt"></i></th>
                            <th><i class="fas fa-user-cog"></i></th>
                            {/if}
                        </tr>
                    </thead>
                    <tbody class="body-table">
                        {foreach from=$usuarios item=usuario}
                            <tr>
                                <td>{$usuario->email}</td>
                                {if $usuario->administrador eq false}
                                <td>Usuario</td>
                                {else}
                                <td>Administrador</td>
                                {/if}
                                {if $logeado->administrador}
                                <td><button><a href="deleteUsuario/{$usuario->id_usuario}"><i class="fas fa-trash-alt"></i></a><button></td>
                                    {if $usuario->administrador eq false}
                                    <td><button><a href="establecerAdmin/{$usuario->id_usuario}"><i class="fas fa-user-cog"></i></a><button></td>
                                    {else}
                                    <td><button><a href="quitarAdmin/{$usuario->id_usuario}"><i class="fas fa-ban"></i></a><button></td>
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