{include file="header.tpl"}
{include file="botonera.tpl"}
<form action="insertarPelicula" method="POST">
    <div class="tabla_inputs">
        <label>Titulo</label>
        <div class="respuesta">
            <input class="input_titulo" name="input_titulo" type="text" placeholder="Titulo">
        </div>
        <label>Descripción</label>
        <div class="respuesta">
            <input class="input_descripcion" name="input_descripcion" type="text" placeholder="Descripcion">
        </div>
        <label>Director/a</label>
        <div class="respuesta">
            <input class="input_director" name="input_director" type="text" placeholder="Director/a">
        </div>
        <label>Fecha de Estreno</label>
        <div class="respuesta">
            <input class="input_estreno" name="input_estreno" type="text" placeholder="Estreno">
        </div>
        <label>Genero</label>
        <div class="respuesta">
            <select name="select_genero">';
                {foreach from=$generos item=genero}
                    <option value="{$genero->id_genero}">{$genero->tipo}</option>
                {/foreach}
            </select>
        </div>
        <div>
            <button type="submit" class="btn_agregar">Agregar</button>
        </div>
    </div>    
</form>    
{include file="footer.tpl"}
