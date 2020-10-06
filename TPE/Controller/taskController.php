<?php

include_once './View/taskView.php';
include_once './Model/taskModel.php';

class taskController{

    private $view;
    private $model;

    function __construct(){

        $this->view = new taskView();
        $this->model = new taskModel();

    }

    function Home(){
        $pelicula=$this->model->getAllData();
        $genero=$this->model->getDatosGenero();
        $this->view->showHome($pelicula, $genero);
    }

    function InsertarPelicula(){
        if(empty($_POST['input_titulo']) || isset($_POST['input_titulo']) || empty($_POST['input_descripcion']) || isset($_POST['input_descripcion']) || empty($_POST['input_director']) || isset($_POST['input_director']) || empty($_POST['input_estreno']) || isset($_POST['input_estreno']) || empty($_POST['select_genero']) || isset($_POST['select_genero'])){
            $this->view->showError("No se pudo insertar la pelicula. Por favor complete todos los campos.");
        }
        else{
            $titulo=$_POST['input_titulo'];
            $descripcion=$_POST['input_descripcion'];
            $director=$_POST['input_director'];
            $estreno=$_POST['input_estreno'];
            $genero=$_POST['select_genero'];
            $this->model->insertarPelicula($titulo, $descripcion, $director, $estreno, $genero);
            $this->view->showHomeLocation();
        }
        
    }

    function MostrarFormularioInsertar(){
        $genero=$this->model->getDatosGenero();
        $this->view->showFormularioInsertar($genero);
    }

    function EditarPelicula(){
        if(empty($_POST['editar_nombre_input']) || isset($_POST['input_titulo']) || empty($_POST['input_descripcion']) || isset($_POST['input_descripcion']) || empty($_POST['input_director']) || isset($_POST['input_director']) || empty($_POST['input_estreno']) || isset($_POST['input_estreno']) || empty($_POST['select_genero']) || isset($_POST['select_genero'])){
            $this->view->showError("No se pudo insertar la pelicula. Por favor complete todos los campos.");
        }
        else{
            $titulo=$_POST['input_titulo'];
            $descripcion=$_POST['input_descripcion'];
            $director=$_POST['input_director'];
            $estreno=$_POST['input_estreno'];
            $genero=$_POST['select_genero'];
            $this->model->insertarPelicula($titulo, $descripcion, $director, $estreno, $genero);
            $this->view->showHomeLocation();
        }
    }

    function MostrarFormularioEditar(){
        $genero=$this->model->getDatosGenero();
        $this->view->showFormularioEditar($genero);
    }

    function BorrarPelicula($params=null){
        $idPelicula=$params[':ID'];
        $this->model->borrarPeliculaDB($idPelicula);
        $this->view->showHomeLocation();
    }

}