<?php
    include_once 'RouterClass.php';
    include_once 'Api/apiComentarioController.php';

    $router = new Router();

    //--------------RUTAS--------------

    //OBTENER
    $router->addRoute("comentarios", "GET", "apiComentarioController", "getComentarios");
    $router->addRoute("comentarios/:ID", "GET", "apiComentarioController", "getComentario");
    $router->addRoute("peliculas/:ID/comentarios", "GET", "apiComentarioController", "getComentariosPorPelicula");

    //ELIMINAR
    $router->addRoute("comentarios/:ID", "DELETE", "apiComentarioController", "deleteComentario");

    //INSERTAR
    $router->addRoute("comentarios", "POST", "apiComentarioController", "insertComentario");
    
    //EDITAR
    $router->addRoute("comentarios/:ID", "PUT", "apiComentarioController", "editComentario");

    //RUN
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 