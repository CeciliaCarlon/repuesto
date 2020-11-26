{literal}
<div id="vue-comentarios">
    <h2 class="comentarios">Comentarios</h2>
    <ul id="ulComentarios">
        <li v-for="comentario in comentarios" class="p-3 mb-2 bg-danger">
            <h3>{{comentario.texto}}</h3> 
            <small id="emailHelp" class="form-text">PUNTUACION: {{comentario.puntuacion}}</small>
            <input type="hidden" id="idComentario" :value="comentario.id_comentario">
{/literal}
        {if $logeado!= null && $logeado->administrador}
        <button id="botonEliminarComentario" class="btn btn-outline-light" @click="deleteComentario(comentario.id_comentario)">Eliminar Comentario</button>
        {/if}
        </li>
    </ul>
</div>

