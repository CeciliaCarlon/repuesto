<?php

    include_once 'Controller/peliculaController.php';
    include_once 'Controller/userController.php';
    include_once 'Controller/generoController.php';
    include_once 'RouterClass.php';
   
    //BASE URL
    define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');

    $r = new Router();
  
    //------------------RUTAS-----------------

    //BOTONERA
    $r->addRoute("home", "GET", "peliculaController", "Home");
    $r->addRoute("peliculas/pagina/:PAGE", "GET", "peliculaController", "TablaPeliculas");
    $r->addRoute("generos", "GET", "generoController", "TablaGeneros");
    $r->addRoute("usuarios", "GET", "userController", "TablaUsuarios");
    
    //SESION
    $r->addRoute("registrarUser", "POST", "userController", "Registrar");
    $r->addRoute("login", "GET", "userController", "MostrarFormularioLogin");
    $r->addRoute("logout", "GET", "userController", "Logout");
    $r->addRoute("verificarUser", "POST", "userController", "VerificarUsuario");
    $r->addRoute("formularioRegistrarse", "GET", "userController", "MostrarFormularioRegistrarse");

    //FILTRO
    $r->addRoute("filtrarPelicula/:ID/pagina/:PAGE", "GET", "peliculaController", "FiltrarPelicula");

    //SOLO PAGE
    $r->addRoute("verMasPelicula/:ID", "GET", "peliculaController", "MostrarMasInformacionPelicula");

    //ELIMINAR
    $r->addRoute("deletePelicula/:ID", "GET", "peliculaController", "DeletePelicula");
    $r->addRoute("deleteGenero/:ID", "GET", "generoController", "DeleteGenero");
    $r->addRoute("deleteUsuario/:ID", "GET", "userController", "DeleteUsuario");
    $r->addRoute("deleteImagen/:ID", "GET", "peliculaController", "DeleteImagenPelicula");

    //INSERTAR
    $r->addRoute("insertarPelicula", "POST", "peliculaController", "InsertarPelicula");
    $r->addRoute("insertarGenero", "POST", "generoController", "InsertarGenero");

    //EDITAR
    $r->addRoute("editarPelicula/:ID", "POST", "peliculaController", "EditarPelicula");
    $r->addRoute("editarGenero/:ID", "POST", "generoController", "EditarGenero");
    $r->addRoute("establecerAdmin/:ID", "GET", "userController", "EstablecerComoAdmin");
    $r->addRoute("quitarAdmin/:ID", "GET", "userController", "QuitarComoAdmin");

    //FORMULARIOS
    $r->addRoute("formularioInsertarPelicula", "GET", "peliculaController", "MostrarFormularioInsertarPelicula");
    $r->addRoute("formularioInsertarGenero", "GET", "generoController", "MostrarFormularioInsertarGenero");
    $r->addRoute("formularioEditarPelicula/:ID", "GET", "peliculaController", "MostrarFormularioEditarPelicula");
    $r->addRoute("formularioEditarGenero/:ID", "GET", "generoController", "MostrarFormularioEditarGenero");

    //RUTA POR DEFECTO
    $r->setDefaultRoute("peliculaController", "Home");

    //RUN
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
