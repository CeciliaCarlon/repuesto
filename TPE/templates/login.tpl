{include file="header.tpl"}
{include file="botonera.tpl"}
    <article>
        <h2>Iniciar Sesion</h2>
        <section class="formulario">
            <form action="verificarUser" method="POST" id="formulario">
                <div class="formulario_contenido">
                    <input type="email" name="input_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mail">
                </div>
                <div class="formulario_contenido">
                    <input type="password" name="input_contraseña" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contraseña">
                </div>
                <div class="formulario_contenido">
                    <button id="enviar" class="btn btn-light" type="submit">Iniciar Sesion <i class="fas fa-user"></i></button>
                    <small id="emailHelp" class="form-text">¿No estas registrado?</small>
                    <small><a class="text-white" href="{BASE_URL}formularioRegistrarse">Registrarse</a></small>
                </div>    
             </form>
        </section>        
    </article>
{include file="footer.tpl"}
