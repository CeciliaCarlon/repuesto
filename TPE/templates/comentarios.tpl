<div class="contenedorComentarios">
<input type="hidden" id="idPelicula" value="{$pelicula->id_pelicula}">
{if $logeado}
<section class="formularioComentarios border border-white">
    <form method="POST" id="insertarComentario" class="mx-auto">
        <div class="formulario_contenido">
            <h4 class="p-3 mb-2 bg-danger">Deja tu comentario</h4>
            <textarea id="comentario" name="input_comentario" placeholder="Comentario" rows="4" cols="50"></textarea>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Puntuacion</label>
                </div>
                <select class="custom-select" id="selectPuntuacion">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
        <input type="hidden" id="idUsuario" value="{$logeado->id_usuario}">
        <div class="formulario_contenido">
            <button class="btn btn-light" id="enviar" type="submit">Comentar</button>
        </div>       
     </form>
</section>   
{/if}
<div class="comentariosSoloPage">
    {include file="vue/comentarios.vue"}
</div>
</div>
<script src="js/comentarios.js"></script>
            