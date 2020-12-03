<?php

include_once './Model/comentarioModel.php';
include_once 'apiController.php';
include_once './helper.php';

class apiComentarioController extends apiController{

    //ATRIBUTO
    private $helper;

    //CONSTRUCTOR
    function __construct(){
        parent::__construct();
        $this->model= new comentarioModel();
        $this->helper= new helper();
    }

    //OBTENER COMENTARIOS
    function getComentarios($params= null){
        $comentarios= $this->model->getAllComentarios();
        $this->view->response($comentarios, 200);
    }

    //OBTENER COMENTARIOS POR PELICULA
    function getComentariosPorPelicula($params=null){
        $idPelicula=$params[':ID'];
        $comentarios= $this->model->getComentarioPorPeli($idPelicula);
        $this->view->response($comentarios, 200);
    }

    //OBTENER COMENTARIO
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

    //ELIMINAR COMENTARIO
    function deleteComentario($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if($logeado==null && !$logeado->administrador){
            $this->view->response("The requested page in not available.", 404);
        }
        else{
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
    }

    //INSERTAR COMENTARIO
    function insertComentario($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if($logeado==null && !$logeado->administrador){
            $this->view->response("The requested page in not available.", 404);
        }
        else{
            $body= $this->getData();
            $texto= $body->texto;
            $puntuacion= $body->puntuacion;
            $idPelicula= $body->id_pelicula;
            $idUsuario= $body->id_usuario;
            $idInsertado= $this->model->insertComentario($texto, $puntuacion, $idPelicula, $idUsuario);
            if($idInsertado){
                $this->view->response("Comentario id=$idInsertado insertado correctamente", 201);
            }
            else{
                $this->view->response("Comentario no insertado.", 404);
            }
        }
    }

    //EDITAR COMENTARIO
    function editComentario($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if($logeado==null && !$logeado->administrador){
            $this->view->response("The requested page in not available.", 404);
        }
        else{
            $id=$params[':ID'];
            $comentario= $this->model->getComentario($id);
            if($comentario){
                $body= $this->getData();
                if(empty($body->texto) || !isset($body->texto) || empty($body->puntuacion) || !isset($body->puntuacion) 
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
}