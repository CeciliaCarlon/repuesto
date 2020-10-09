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

    function ShowTablaGenero (){
        $tipo=$this->model->GetGeneros();
        $this->view-> showTablaGenero( $tipo);
    }

    function InsertTask(){
        
        $this->model->insertTask($_POST['input_tipo']);
        $this->Home();
    }

    function InsertarTask(){
        if(empty($_POST['input_tipo']) || !isset($_POST['input_tipo'])){
            echo "No se pudo insertar";
        }
        else{
            $tipo=$_POST['input_tipo'];
            $this->model->insertTask($tipo);
            $this->view->showHomeLocation();
        }


    }
    
    function  DeleteGenero($params=null) {
        $id_genero= $params[':ID'];
        $this->model ->DeleteGenero($id_genero);
        $this->view->showTablaLocation(); 
    }

    function EditTask($params = null){
        $genero_id = $params[':ID'];
        $genero = $this->model->GetTask($generos_id);
        
        $this->view->showGeneroEditar($generos);
    }

    /* *
    function MostrarFormularioEditar(){
        $genero=$this->model->getTasks();
        $this->view->showGeneroEditar($genero);
    }**/
}