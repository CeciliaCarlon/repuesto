<?php

include_once "./View/generoView.php";
include_once "./Model/generoModel.php";

class generoController{

    private $view;
    private $model;

    function __construct(){

        $this->view = new generoView();
        $this->model= new generoModel();

    }

    private function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['email'])){
            return false;
        }
        else{
            return true;
        }
    }

    function ShowTablaGenero (){
        $logeado=$this->checkLoggedIn();
        $tipo=$this->model->GetGeneros();
        $this->view-> showTablaGenero($tipo, $logeado);
    }

    function InsertarGenero(){
        $logeado=$this->checkLoggedIn();
        if(empty($_POST['input_tipo']) || !isset($_POST['input_tipo'])){
            $this->view->showError("No se pudo insertar el genero. Por favor complete todos los campos.", $logeado);
        }
        else{
            $tipo=$_POST['input_tipo'];
            $this->model->insertarGenero($tipo);
            $this->view->showTablaLocation();
        }


    }
    
    function  DeleteGenero($params=null) {
        $id_genero= $params[':ID'];
        $this->model ->DeleteGenero($id_genero);
        $this->view->showTablaLocation(); 
    }

    function EditarGenero($params = null){
        $logeado=$this->checkLoggedIn();
        if(empty($_POST['editar_genero_input']) || !isset($_POST['editar_genero_input'])){
            $this->view->showError("No se pudo editar el genero. Por favor complete todos los campos.", $logeado);
        }
        else{
            $id_genero=$params[':ID'];
            $genero=$_POST['editar_genero_input'];
            $this->model->UpdateGenero( $genero,$id_genero);
            $this->view->showTablaLocation();
        }
    }
    
    function MostrarFormularioInsertarGenero (){
        $logeado=$this->checkLoggedIn();
        $genero=$this->model->GetGeneros();
        $this->view->showFormularioInsertarGenero($genero, $logeado);
    }

    function MostrarFormularioEditarGenero($params=null){
        $logeado=$this->checkLoggedIn();
        $id_genero=$params[':ID'];
        $datosGeneroPorEditar=$this->model->getGeneroID($id_genero);
        $genero=$this->model->GetGeneros();
        $this->view->showFormularioEditarGenero($genero,$datosGeneroPorEditar, $logeado);
    }
}