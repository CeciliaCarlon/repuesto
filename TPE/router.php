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

    //filtro
    $r->addRoute("filtrarPelicula", "POST", "peliculaController", "FiltrarPelicula");
    //ver mas
    $r->addRoute("verMasPelicula/:ID", "GET", "peliculaController", "MostrarMasInformacionPelicula");
    //borrar
    $r->addRoute("deletePelicula/:ID", "GET", "peliculaController", "BorrarPelicula");
    //insertar
    $r->addRoute("formularioInsertarPelicula", "GET", "peliculaController", "MostrarFormularioInsertar");
    $r->addRoute("insertarPelicula", "POST", "peliculaController", "InsertarPelicula");
    //editar
    $r->addRoute("formularioEditarPelicula/:ID", "GET", "peliculaController", "MostrarFormularioEditar");
    $r->addRoute("editarPelicula/:ID", "POST", "peliculaController", "EditarPelicula");


    //Ruta por defecto.
    $r->setDefaultRoute("peliculaController", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

?>