<?php
    require_once 'Controller/taskController.php';
    require_once 'RouterClass.php';
    
    define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':').$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF'].'/');

    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "taskController", "Home");

    //Esto lo veo en TasksView
    $r->addRoute("insertar", "POST", "taskController", "Insertar");

    $r->addRoute("delete/:ID", "GET", "TasksController", "BorrarLaTaskQueVienePorParametro");
    $r->addRoute("completar/:ID", "GET", "TasksController", "MarkAsCompletedTask");

    //Ruta por defecto.
    $r->setDefaultRoute("taskController", "Home");

    //Advance
    $r->addRoute("autocompletar", "GET", "TasksAdvanceController", "AutoCompletar");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>