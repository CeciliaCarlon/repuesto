{include file="header.tpl"}
{include file="botonera.tpl"}
<form action="insertarGenero" method="POST">
    <div class="tabla_inputs">
        <label>Tipo</label>
        <div class="respuesta">
            <input class="input_tipo" name="input_tipo" type="text" placeholder="Tipo">
        </div>
        <div>
            <button type="submit" class="btn_agregar">Agregar</a></button>
        </div>
    </div>    
</form>    
{include file="footer.tpl"}