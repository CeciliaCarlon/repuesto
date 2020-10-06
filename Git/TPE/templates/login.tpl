{include file="header.tpl"}
{include file="botonera.tpl"}
    <article>
        <h2>Iniciar Sesion</h2>
        <section class="formulario">
            <form id="formulario">
                <div class="formulario_contenido">
                    <input type="text" id="usuario" placeholder="Nombre"/>
                </div>
                <div class="formulario_contenido">
                    <input type="text" id="mail" placeholder="Mail"/>
                </div>
                <div class="formulario_contenido">
                    <input type="password" id="contraseña" placeholder="Contraseña"/>
                </div>
                <div class="formulario_contenido">
                    <button id="enviar" type="submit">Enviar</button>
                </div>        
             </form>
        </section>
        
    </article>
{include file="footer.tpl"}