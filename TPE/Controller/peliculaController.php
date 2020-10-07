<?php

include_once './View/peliculaView.php';
include_once './Model/peliculaModel.php';

class peliculaController{

    private $view;
    private $model;

    function __construct(){

        $this->view = new peliculaView();
        $this->model = new peliculaModel();

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

    function Home(){
        $logeado=$this->checkLoggedIn();
        if($logeado){
            
        }
        $this->view->showHome();
    }

    function Tabla(){
        $pelicula=$this->model->getAllData();
        $genero=$this->model->getDatosGenero();
        $this->view->showTabla($pelicula, $genero);
    }

    function InsertarPelicula(){
        if(empty($_POST['input_titulo']) || !isset($_POST['input_titulo']) || empty($_POST['input_descripcion']) || 
        !isset($_POST['input_descripcion']) || empty($_POST['input_director']) || !isset($_POST['input_director']) || 
        empty($_POST['input_estreno']) || !isset($_POST['input_estreno']) || empty($_POST['select_genero']) || !isset($_POST['select_genero'])){
            $this->view->showError("No se pudo insertar la pelicula. Por favor complete todos los campos.");
        }
        else{
            $titulo=$_POST['input_titulo'];
            $descripcion=$_POST['input_descripcion'];
            $director=$_POST['input_director'];
            $estreno=$_POST['input_estreno'];
            $genero=$_POST['select_genero'];
            $this->model->insertarPelicula($titulo, $descripcion, $director, $estreno, $genero);
            $this->view->showTablaLocation();
        }
        
    }

    function MostrarFormularioInsertar(){
        $genero=$this->model->getDatosGenero();
        $this->view->showFormularioInsertar($genero);
    }

    function EditarPelicula($params=null){
        $idPelicula=$params[':ID'];
        $datosPeliculaPorEditar=$this->model->getPeliculaID($idPelicula);
        $genero=$this->model->getDatosGenero();
        $this->view->showFormularioEditar($genero,$datosPeliculaPorEditar);
    }

    function ActualizarTablaPelicula($params=null){
        if(empty($_POST['editar_titulo_input']) || !isset($_POST['editar_titulo_input']) || empty($_POST['editar_descripcion_input']) || 
        !isset($_POST['editar_descripcion_input']) || empty($_POST['editar_director_input']) || !isset($_POST['editar_director_input']) || 
        empty($_POST['editar_estreno_input']) || !isset($_POST['editar_estreno_input']) || empty($_POST['editar_genero_select']) || 
        !isset($_POST['editar_genero_select'])){
            $this->view->showError("No se pudo editar la pelicula. Por favor complete todos los campos.");
        }
        else{
            $idPelicula=$params[':ID'];
            $titulo=$_POST['editar_titulo_input'];
            $descripcion=$_POST['editar_descripcion_input'];
            $director=$_POST['editar_director_input'];
            $estreno=$_POST['editar_estreno_input'];
            $genero=$_POST['editar_genero_select'];
            $this->model->updateTablaPelicula($idPelicula, $titulo, $descripcion, $director, $estreno, $genero);
            $this->view->showTablaLocation();
        }
    }

    function BorrarPelicula($params=null){
        $idPelicula=$params[':ID'];
        $this->model->borrarPeliculaDB($idPelicula);
        $this->view->showTablaLocation();
    }

    function FiltrarPelicula($params=null){
        $id_genero=$params[':ID'];
        $generoElegido=$this->model->getGeneroID($id_genero);
        $peliculasFiltradas=$this->model->getPeliculaPorGenero($generoElegido->id);
        $this->view->showTabla($peliculasFiltradas,$generoElegido);
    }

}