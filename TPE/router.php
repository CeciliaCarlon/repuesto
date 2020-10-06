<?php
    require_once 'Controller/taskController.php';
   // require_once 'Controller/taskControllergenero.php';
    require_once 'RouterClass.php';
   
    
<<<<<<< HEAD
    define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');
=======
     
    define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':').$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF'].'/');
>>>>>>> 0561bd0a5cf5c3f6d25ba2fdf1fa3d7a21f1d8ff

    $r = new Router();

  
    // rutas
    $r->addRoute("home", "GET", "taskController", "Home");
<<<<<<< HEAD
    $r->addRoute("formularioInsertarPelicula", "GET", "taskController", "MostrarFormularioInsertar");
    $r->addRoute("insertar", "POST", "taskController", "InsertarPelicula");
    $r->addRoute("delete/:ID", "GET", "taskController", "BorrarPelicula");
    $r->addRoute("filtrar/:ID", "GET", "taskController", "FiltrarPelicula");
    $r->addRoute("formularioEditarPelicula/:ID", "GET", "taskController", "MostrarFormularioEditar");
    $r->addRoute("editar", "POST", "taskController", "EditarPelicula");

=======
    $r->addRoute("home", "GET", "taskControllergenero", "Home");
    //Esto lo veo en TasksView
    $r->addRoute("insertar", "POST", "taskController", "Insertar");
    $r->addRoute("insertar", "POST", "taskControllergenero", "InsertarTask");

    //Borrar
    $r->addRoute("delete/:ID", "GET", "TasksController", "BorrarLaTaskQueVienePorParametro");
    $r->addRoute("delete/:ID", "GET", "taskControllergenero", "DeleteTask");
    //completar
    $r->addRoute("completar/:ID", "GET", "TasksController", "MarkAsCompletedTask");
    $r->addRoute("completar/:ID", "GET", "taskControllergenero", "MarkAsCompletedTask");
>>>>>>> 0561bd0a5cf5c3f6d25ba2fdf1fa3d7a21f1d8ff
    //Ruta por defecto.
    $r->setDefaultRoute("taskController", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 

     //rutas para el genero


  
    $r->addRoute("edit/:ID", "GET", "TasksController", "EditTask");
   
    $r->setDefaultRoute("taskControllergenero", "Home");

   
    $r->addRoute("autocompletar", "GET", "TasksAdvanceController", "AutoCompletar");

?>