
{include file="header.tpl"}
{include file="botonera.tpl"}
<form action="insertarGenero" method="POST">
<form action="insertaeImagen" method="POST" enctype="multipart/form-data">
    <div class="tabla_inputs">
        <label>Tipo</label>
        <div class="respuesta">
            <input class="input_tipo" name="input_tipo" type="text" placeholder="Tipo">
            <input type="file" name="input_imagen" id="imageToUpload">

        </div>
        <div>
            <button type="submit" class="btn_agregar">Agregar</a></button>
        </div>
    </div>    
</form>    
{include file="footer.tpl"}