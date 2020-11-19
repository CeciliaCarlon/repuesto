<?php

include_once './Model/comentarioModel.php';
include_once 'apiController.php';

class apiComentarioController extends apiController{

    function __construct(){
        parent::__construct();
        $this->model= new comentarioModel();
    }

    function getComentarios($params= null){
        $comentarios= $this->model->getAllComentarios();
        if($comentarios){
            $this->view->response($comentarios, 200);
        }
        else{
            $this->view->response("Comentarios not found", 404);
        }
    }

    function getComentario($params= null){
        $id=$params[':ID'];
        $comentario= $this->model->getComentario($id);
        if($comentario){
            $this->view->response($comentario, 200);
        }
        else{
            $this->view->response("Comentario id=$id not found.", 404);
        }
    }

    function deleteComentario($params=null){
        $id=$params[':ID'];
        $comentario= $this->model->getComentario($id);
        if($comentario){
            $this->model->deleteComentario($id);
            $this->view->response("Comentario id=$id eliminada con exito", 200);
        }
        else{
            $this->view->response("Comentario id=$id not found.", 404);
        }
    }

    function insertComentario($params=null){
        $body= $this->getData();
        $texto= $body->texto;
        $puntuacion= $body->id_puntuacion;
        $idPelicula= $body->id_pelicula;
        $idUsuario= $body->id_usuario;
        $idEditado= $this->model->insertComentario($texto, $puntuacion, $idPelicula, $idUsuario);
        if($idEditado){
            $this->view->response("Comentario id=$idEditado insertado correctamente", 201);
        }
        else{
            $this->view->response("Comentario id=$id not found.", 404);
        }
    }

    function editComentario($params=null){
        $id=$params[':ID'];
        $comentario= $this->model->getComentario($id);
        if($comentario){
            $body= $this->getData();
            if(empty($body->texto) || !isset($body->texto) || empty($body->id_puntuacion) || !isset($body->id_puntuacion) 
            || empty($body->id_pelicula) || !isset($body->id_pelicula) || empty($body->id_usuario) || !isset($body->id_usuario)){
                $this->view->response("JSON incorrecto", 404);
            }
            else{
                $texto= $body->texto;
                $puntuacion= $body->id_puntuacion;
                $idPelicula= $body->id_pelicula;
                $idUsuario= $body->id_usuario;
                $idEditado=$this->model->updateComentario($id,$texto, $puntuacion, $idPelicula, $idUsuario);  
                $this->view->response("Comentario id=$idEditado editado correctamente", 200);
            }
        }
        else{
            $this->view->response("Comentario id=$id not found.", 404);
        }
    }
}