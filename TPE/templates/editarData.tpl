{include file="header.tpl"}
{include file="botonera.tpl"}
<form action="editar" method="POST">
    <div class="tabla_inputs">
        <label>Titulo</label>
        <div class="respuesta">
            <input class="editar_titulo_input" name="editar_titulo_input" type="text" placeholder="Editar Titulo">
        </div>
        <label>Descripcion</label>
        <div class="respuesta">
            <input class="editar_descripcion_input" name="editar_descripcion_input" type="text" placeholder="Editar Descripcion">
        </div>
        <label>Director/a</label>
        <div class="respuesta">
            <input class="editar_director_input" name="editar_director_input" type="text" placeholder="Editar Director/a">
        </div>
        <label>Fecha de Estreno</label>
        <div class="respuesta">
            <input class="editar_estreno_input" name="editar_estreno_input" type="text" placeholder="Editar Fecha de Estreno">
        </div>
        <label>Genero</label>
        <div class="respuesta">
            <select name="select_genero">';
                {foreach from=$generos item=genero}
                    <option value="{$genero->id}">{$genero->tipo}</option>
                {/foreach}
            </select>
        </div>
        <div>
            <button type="submit">Editar</button>
            <button><a href="{BASE_URL}home">Cancelar</button>
        </div>
    </div>
<form>   
{include file="footer.tpl"} 
