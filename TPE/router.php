<?php
    include_once 'Controller/peliculaController.php';
    include_once 'Controller/userController.php';
    include_once 'Controller/generoController.php';
    include_once 'RouterClass.php';
   
    define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');

    $r = new Router();

  
    // rutas
    $r->addRoute("home", "GET", "peliculaController", "Home");
    $r->addRoute("tabla", "GET", "peliculaController", "Tabla");
    $r->addRoute("login", "GET", "userController", "Login");

    $r->addRoute("verificarUser", "POST", "userController", "VerificarUsuario");

    //filtro
    $r->addRoute("filtrarPelicula", "POST", "peliculaController", "FiltrarPelicula");

    //ver mas
    $r->addRoute("verMasPelicula/:ID", "GET", "peliculaController", "MostrarMasInformacionPelicula");

    //borrar
    $r->addRoute("deletePelicula/:ID", "GET", "peliculaController", "BorrarPelicula");
    $r->addRoute("deleteGenero/:ID", "GET", "generoController", "DeleteGenero");

    //insertar
    $r->addRoute("formularioInsertarPelicula", "GET", "peliculaController", "MostrarFormularioInsertarPelicula");
    $r->addRoute("insertarPelicula", "POST", "peliculaController", "InsertarPelicula");
    $r->addRoute("formularioInsertarGenero", "GET", "generoController", "MostrarFormularioInsertarGenero");//ESTE
    $r->addRoute("insertarGenero", "POST", "generoController", "InsertarGenero");//ESTE

    //editar
    $r->addRoute("formularioEditarPelicula/:ID", "GET", "peliculaController", "MostrarFormularioEditarPelicula");
    $r->addRoute("editarPelicula/:ID", "POST", "peliculaController", "EditarPelicula");
    $r->addRoute("formularioEditarGenero/:ID", "GET", "generoController", "MostrarFormularioEditarGenero");//ESTE
    $r->addRoute("editarGenero/:ID", "POST", "generoController", "EditarGenero");//ESTE

    //Ruta por defecto.
    $r->setDefaultRoute("peliculaController", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

?>