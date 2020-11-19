<?php

include_once './Model/puntajeModel.php';
include_once 'apiController.php';

class apiPuntajeController extends apiController{

    function __construct(){
        parent::__construct();
        $this->model= new puntajeModel();
    }

    function getPuntuaciones($params= null){
        $puntuaciones= $this->model->getPuntuaciones();
        if($puntuaciones){
            $this->view->response($puntuaciones, 200);
        }
        else{
            $this->view->response("puntuaciones not found", 404);
        }
    }

    function getPuntuacion($params= null){
        $id=$params[':ID'];
        $puntuacion= $this->model->getPuntuacion($id);
        if($puntuacion){
            $this->view->response($puntuacion, 200);
        }
        else{
            $this->view->response("Puntuacion id=$id not found.", 404);
        }
    }
}
