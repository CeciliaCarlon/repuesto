{literal}
<div id="vue-comentarios">
    <ul id="ulComentarios">
        <li v-for="comentario in comentarios" id="">
            {{comentario.texto}} ({{comentario.puntuacion}})
            <input type="hidden" id="idComentario" :value="comentario.id_comentario">
            <button id="botonEliminarComentario">Eliminar</button>
        </li>
    </ul>
</div>
{/literal}