{include file="header.tpl"}
{include file="botonera.tpl"}
<article>
        <h2>Registrarse</h2>
        <section class="formulario">
            <form action="registrarUser" method="POST" id="formulario">
                <div class="formulario_contenido">
                    <input type="text" id="mail" name="input_email" placeholder="Mail"/>
                </div>
                <div class="formulario_contenido">
                    <input type="password" id="contraseña" name="input_contraseña" placeholder="Contraseña"/>
                </div>
                <div class="formulario_contenido">
                    <input type="password" id="contraseña" name="input_confirmacion_contraseña" placeholder="Confirmar Contraseña"/>
                </div>
                <div class="formulario_contenido">
                    <button id="enviar" type="submit">Registrarse</button>
                </div>       
             </form>
        </section>        
    </article>
{include file="footer.tpl"}