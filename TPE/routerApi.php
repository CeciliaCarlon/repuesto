<?php
    include_once 'RouterClass.php';
    include_once 'Api/apiComentarioController.php';
    include_once 'Api/apiPuntajeController.php';
    include_once 'Api/apiController.php';

    $router = new Router();

    //rutas comentarios
    $router->addRoute("comentarios", "GET", "apiComentarioController", "getComentarios");
    $router->addRoute("comentarios/:ID", "GET", "apiComentarioController", "getComentario");
    $router->addRoute("comentarios/:ID", "DELETE", "apiComentarioController", "deleteComentario");
    $router->addRoute("comentarios", "POST", "apiComentarioController", "insertComentario");
    $router->addRoute("comentarios/:ID", "PUT", "apiComentarioController", "editComentario");

    //rutas puntaciones
    $router->addRoute("puntuaciones", "GET", "apiPuntajeController", "getPuntuaciones");
    $router->addRoute("puntuaciones/:ID", "GET", "apiPuntajeController", "getPuntuacion");

    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 