<?php
    include_once 'Controller/peliculaController.php';
    include_once 'Controller/userController.php';
   // require_once 'Controller/taskControllergenero.php';
    include_once 'RouterClass.php';
   
    define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');

    $r = new Router();

  
    // rutas
    $r->addRoute("home", "GET", "peliculaController", "Home");
    $r->addRoute("tabla", "GET", "peliculaController", "Tabla");
    $r->addRoute("login", "GET", "userController", "Login");

    $r->addRoute("verificarUser", "POST", "userController", "VerificarUsuario");

    $r->addRoute("formularioInsertarPelicula", "GET", "peliculaController", "MostrarFormularioInsertar");
    $r->addRoute("insertar", "POST", "peliculaController", "InsertarPelicula");
    $r->addRoute("delete/:ID", "GET", "peliculaController", "BorrarPelicula");
    $r->addRoute("filtrar/:ID", "GET", "peliculaController", "FiltrarPelicula");
    $r->addRoute("editar/updateTablaPeliculas/:ID", "POST", "peliculaController", "ActualizarTablaPelicula");
    $r->addRoute("editar/:ID", "GET", "peliculaController", "EditarPelicula");
    $r->addRoute("filtrar/:ID", "GET", "peliculaController", "FiltrarPelicula");

    //Ruta por defecto.
    $r->setDefaultRoute("peliculaController", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

?>