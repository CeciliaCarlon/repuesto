<?php
    include_once 'Controller/peliculaController.php';
    include_once 'RouterClass.php';
    
    define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');

    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "peliculaController", "Home");
    $r->addRoute("tabla", "GET", "peliculaController", "Tabla");
    $r->addRoute("login", "GET", "peliculaController", "Login");
    $r->addRoute("formularioInsertarPelicula", "GET", "peliculaController", "MostrarFormularioInsertar");
    $r->addRoute("insertar", "POST", "peliculaController", "InsertarPelicula");
    $r->addRoute("delete/:ID", "GET", "peliculaController", "BorrarPelicula");
    $r->addRoute("filtrar/:ID", "GET", "peliculaController", "FiltrarPelicula");
    $r->addRoute("updateTablaPeliculas/:ID", "POST", "peliculaController", "ActualizarTablaPelicula");
    $r->addRoute("editar/:ID", "GET", "peliculaController", "EditarPelicula");

    //Ruta por defecto.
    $r->setDefaultRoute("peliculaController", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>