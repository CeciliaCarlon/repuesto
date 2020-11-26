<?php
    include_once 'RouterClass.php';
    include_once 'Api/apiComentarioController.php';
    include_once 'Api/apiController.php';

    $router = new Router();

    //rutas comentarios
    $router->addRoute("comentarios", "GET", "apiComentarioController", "getComentarios");
    $router->addRoute("comentarios/:ID", "GET", "apiComentarioController", "getComentario");
    $router->addRoute("peliculas/:ID/comentarios", "GET", "apiComentarioController", "getComentariosPorPelicula");
    $router->addRoute("comentarios/:ID", "DELETE", "apiComentarioController", "deleteComentario");
    $router->addRoute("comentarios", "POST", "apiComentarioController", "insertComentario");
    $router->addRoute("comentarios/:ID", "PUT", "apiComentarioController", "editComentario");

    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 