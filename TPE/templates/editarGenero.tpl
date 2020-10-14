{include file="header.tpl"}
{include file="botonera.tpl"}
<form action="editarGenero/{$datosGeneroPorEditar->id}" method="POST">
    <div class="tabla_input">
        <label>Tipo</label>
            <div class="respuesta">
                <input class="editar_genero_input" name="editar_genero_input" type="text"
                 value="{$datosGeneroPorEditar->tipo}" placeholder="Editar Genero">
            </div>
            <button type="submit">Editar</button>
            <button><a href="{BASE_URL}tabla">Cancelar</a></button>
     </div> 
<form>   
{include file="footer.tpl"}