<?php
    include_once 'Controller/peliculaController.php';
    include_once 'Controller/userController.php';
    include_once 'Controller/generoController.php';
    include_once 'RouterClass.php';
   
    define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');

    $r = new Router();

  
    // rutas
    $r->addRoute("home", "GET", "peliculaController", "Home");
    $r->addRoute("tabla", "GET", "peliculaController", "TablaPeliculas");
    $r->addRoute("usuarios", "GET", "userController", "TablaUsuarios");
    $r->addRoute("comentarios", "GET", "comentarioController", "GetComentarios");

    //Login/Logout/Registrarse
    $r->addRoute("registrarUser", "POST", "userController", "Registrar");
    $r->addRoute("login", "GET", "userController", "Login");
    $r->addRoute("logout", "GET", "userController", "Logout");
    $r->addRoute("verificarUser", "POST", "userController", "VerificarUsuario");

    //filtro
    $r->addRoute("filtrarPelicula", "POST", "peliculaController", "FiltrarPelicula");

    //ver mas
    $r->addRoute("verMasPelicula/:ID", "GET", "peliculaController", "MostrarMasInformacionPelicula");

    //borrar
    $r->addRoute("deletePelicula/:ID", "GET", "peliculaController", "DeletePelicula");
    $r->addRoute("deleteGenero/:ID", "GET", "generoController", "DeleteGenero");
    $r->addRoute("deleteUsuario/:ID", "GET", "userController", "DeleteUsuario");

    //insertar
    $r->addRoute("insertarPelicula", "POST", "peliculaController", "InsertarPelicula");
    $r->addRoute("insertarGenero", "POST", "generoController", "InsertarGenero");

    //editar
    $r->addRoute("editarPelicula/:ID", "POST", "peliculaController", "EditarPelicula");
    $r->addRoute("editarGenero/:ID", "POST", "generoController", "EditarGenero");
    $r->addRoute("establecerAdmin/:ID", "GET", "userController", "EstablecerComoAdmin");
    $r->addRoute("quitarAdmin/:ID", "GET", "userController", "QuitarComoAdmin");

    //formularios
    $r->addRoute("formularioRegistrarse", "GET", "userController", "MostrarFormularioRegistrarse");
    $r->addRoute("formularioInsertarPelicula", "GET", "peliculaController", "MostrarFormularioInsertarPelicula");
    $r->addRoute("formularioInsertarGenero", "GET", "generoController", "MostrarFormularioInsertarGenero");
    $r->addRoute("formularioEditarPelicula/:ID", "GET", "peliculaController", "MostrarFormularioEditarPelicula");
    $r->addRoute("formularioEditarGenero/:ID", "GET", "generoController", "MostrarFormularioEditarGenero");

    //Ruta por defecto.
    $r->setDefaultRoute("peliculaController", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

?>