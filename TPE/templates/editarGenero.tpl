{include file="header.tpl"}
{include file="botonera.tpl"}
<form action="editarGenero/{$datosGeneroPorEditar->id_genero}" method="POST">
    <div class="form-group">
            <input class="form-control" value="{$datosGeneroPorEditar->tipo}" name="editar_genero_input" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Editar Genero">
        </div>
        <div>
            <button type="submit" class="btn btn-light">Editar</button>
            <a type="button" class="btn btn-light" href="{BASE_URL}generos">Cancelar</a>
        </div> 
    </div>
<form>   
{include file="footer.tpl"}
        