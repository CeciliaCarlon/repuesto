{literal}
<div id="vue-comentarios">
    <ul id="ulComentarios">
        <li v-for="(comentario, key) in comentarios" id="">
            {{comentario.texto}} ({{comentario.puntuacion}})
            <input type="hidden" id="idComentario" :value="comentario.id_comentario">
{/literal}
        {if $logeado->administrador}
        <button id="botonEliminarComentario" @click="deleteComentario(comentario.id_comentario, comentarios, key)">Eliminar</button>
        {/if}
        </li>
    </ul>
</div>