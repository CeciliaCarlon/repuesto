<div class="contenedorComentarios">
<section class="formularioComentarios">
    <form method="POST" id="insertarComentario">
        <div class="formulario_contenido">
            <h4>Deja tu comentario</h4>
            <textarea id="comentario" name="input_comentario" placeholder="Comentario"></textarea>
        </div>
        <div class="formulario_contenido">
            <p>Puntuacion</p>
            <select id="selectPuntuacion" name="selectPuntuacion">';
            {* Esto lo tengo que usar con la apiPuntuacion que tiene una tabla en MySQL
                {foreach from=$puntuaciones item=puntuacion};
                <option value="{$puntuacion->id}">{$puntuacion->numero}</option>
                {/foreach}
            *}
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
        </div>
        <div class="formulario_contenido">
            <button id="enviar" type="submit">Comentar</button>
        </div>       
     </form>
</section>   
<div class="comentariosSoloPage">
    <h2 class="comentarios">Comentarios</h2>
    <ul id="ulComentarios">

    </ul>
</div>
</div>
<script src="js/comentarios.js"></script>