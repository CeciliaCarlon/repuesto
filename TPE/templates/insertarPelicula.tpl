{include file="header.tpl"}
{include file="botonera.tpl"}
<form action="insertarPelicula" method="POST" enctype="multipart/form-data">
    <div class="tabla_inputs">
        <div class="form-group">
            <input class="form-control" name="input_titulo" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Titulo">
        </div>
        <div class="form-group">
            <input class="form-control" name="input_descripcion" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Descripción">
        </div>
        <div class="form-group">
            <input class="form-control" name="input_director" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Director/a">
        </div>
        <div class="form-group">
            <input class="form-control" name="input_estreno" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Estreno">
        </div>
        <label>Genero</label>
        <div class="input-group mb-3">
            <select name="select_genero" class="custom-select" id="inputGroupSelect01">';
                {foreach from=$generos item=genero}
                    <option value="{$genero->id_genero}">{$genero->tipo}</option>
                {/foreach}
            </select>
        </div>
        <div class="form-group">
            <input type="file" class="form-control-file" name="input_imagen" id="exampleFormControlFile1">
        </div>
        </form>
        <div>
            <button type="submit" class="btn btn-light">Agregar</button>
        </div>
    </div>    
</form>    
{include file="footer.tpl"}
