<?php
    require_once 'Controller/taskController.php';
    require_once 'RouterClass.php';
    
    define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');

    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "taskController", "Home");
    $r->addRoute("formularioInsertarPelicula", "GET", "taskController", "MostrarFormularioInsertar");
    $r->addRoute("insertar", "POST", "taskController", "InsertarPelicula");
    $r->addRoute("delete/:ID", "GET", "taskController", "BorrarPelicula");
    $r->addRoute("filtrar/:ID", "GET", "taskController", "FiltrarPelicula");
    $r->addRoute("formularioEditarPelicula/:ID", "GET", "taskController", "MostrarFormularioEditar");
    $r->addRoute("editar", "POST", "taskController", "EditarPelicula");

    //Ruta por defecto.
    $r->setDefaultRoute("taskController", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>