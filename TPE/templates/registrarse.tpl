{include file="header.tpl"}
{include file="botonera.tpl"}
<article>
        <h2>Registrarse</h2>
        <section class="formulario">
            <form action="registrarUser" method="POST" id="formulario">
                <div class="formulario_contenido">
                    <input type="email" name="input_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mail">
                </div>
                <div class="formulario_contenido">
                    <input type="password" name="input_contraseña" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contraseña">
                </div>
                <div class="formulario_contenido">
                    <input type="password" name="input_confirmacion_contraseña" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirmar Contraseña">
                </div>
                <div class="formulario_contenido">
                    <button id="enviar" class="btn btn-light" type="submit">Registrarse<i class="fas fa-user"></i></button>
                </div>       
             </form>
        </section>        
    </article>
{include file="footer.tpl"}