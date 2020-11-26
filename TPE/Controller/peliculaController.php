<?php

include_once './View/peliculaView.php';
include_once './Model/peliculaModel.php';
include_once './Model/generoModel.php';

class peliculaController{

    private $view;
    private $model;
    private $modelGenero;
    private $contollerUser;

    function __construct(){

        $this->view = new peliculaView();
        $this->model = new peliculaModel();
        $this->modelGenero = new generoModel();
        $this->controllerUser= new userController();//hacer helper
    }

    function Home($params=null){
        $logeado=$this->controllerUser->checkLoggedIn();
        $this->view->showHome($logeado);
    }

    function TablaPeliculas($params=null){
        $logeado=$this->controllerUser->checkLoggedIn();
        $pelicula=$this->model->getAllData();
        $genero=$this->modelGenero->GetGeneros();
        $this->view->showTablaPeliculas($pelicula, $genero, $genero, $logeado);
    }

    function InsertarPelicula($params=null){
        $logeado=$this->controllerUser->checkLoggedIn();
        if(empty($_POST['input_titulo']) || !isset($_POST['input_titulo']) || empty($_POST['input_descripcion']) || 
        !isset($_POST['input_descripcion']) || empty($_POST['input_director']) || !isset($_POST['input_director']) || 
        empty($_POST['input_estreno']) || !isset($_POST['input_estreno']) || empty($_POST['select_genero']) || !isset($_POST['select_genero'])){
            $this->view->showError("No se pudo insertar la pelicula. Por favor complete todos los campos.", $logeado);
        }
        else if($logeado==null || $logeado->administrador==false){
            $this->view->showError("No se puede realizar esta accion si no es administrador", $logeado);
        }
        else{
            $titulo=$_POST['input_titulo'];
            $descripcion=$_POST['input_descripcion'];
            $director=$_POST['input_director'];
            $estreno=$_POST['input_estreno'];
            $genero=$_POST['select_genero'];
            $this->model->insertarPelicula($titulo, $descripcion, $director, $estreno, $genero);
            $this->view->showTablaPeliculasLocation();
        }
        
    }

    function MostrarFormularioInsertarPelicula($params=null){
        $logeado=$this->controllerUser->checkLoggedIn();
        $genero=$this->modelGenero->GetGeneros();
        $this->view->showFormularioInsertarPelicula($genero, $logeado);
    }

    function MostrarFormularioEditarPelicula($params=null){
        $logeado=$this->controllerUser->checkLoggedIn();
        $idPelicula=$params[':ID'];
        $datosPeliculaPorEditar=$this->model->getPeliculaID($idPelicula);
        $genero=$this->modelGenero->GetGeneros();
        $this->view->showFormularioEditarPelicula($genero,$datosPeliculaPorEditar, $logeado);
    }

    function EditarPelicula($params=null){
        $logeado=$this->controllerUser->checkLoggedIn();
        if(empty($_POST['editar_titulo_input']) || !isset($_POST['editar_titulo_input']) || empty($_POST['editar_descripcion_input']) || 
        !isset($_POST['editar_descripcion_input']) || empty($_POST['editar_director_input']) || !isset($_POST['editar_director_input']) || 
        empty($_POST['editar_estreno_input']) || !isset($_POST['editar_estreno_input']) || empty($_POST['editar_genero_select']) || 
        !isset($_POST['editar_genero_select'])){
            $this->view->showError("No se pudo editar la pelicula. Por favor complete todos los campos.", $logeado);
        }
        else if ($logeado==null || $logeado->administrador==false){
            $this->view->showError("No se puede realizar esta accion si no es administrador", $logeado);
        }
        else{
            $idPelicula=$params[':ID'];
            $titulo=$_POST['editar_titulo_input'];
            $descripcion=$_POST['editar_descripcion_input'];
            $director=$_POST['editar_director_input'];
            $estreno=$_POST['editar_estreno_input'];
            $genero=$_POST['editar_genero_select'];
            $this->model->updateTablaPelicula($idPelicula, $titulo, $descripcion, $director, $estreno, $genero);
            $this->view->showTablaPeliculasLocation();
        }
    }

    function DeletePelicula($params=null){
        $logeado=$this->controllerUser->checkLoggedIn();
        if($logeado==null || $logeado->administrador==false){
            $this->view->showError("No se puede realizar esta accion si no es administrador", $logeado);
        }
        else{
            $idPelicula=$params[':ID'];
            $this->model->borrarPeliculaDB($idPelicula);
            $this->view->showTablaPeliculasLocation();
        }
    }

    function FiltrarPelicula($params=null){
        $logeado=$this->controllerUser->checkLoggedIn();
        if(empty($_POST['select_genero']) || !isset($_POST['select_genero'])){
            $this->view->showError("No se pudo filtrar la pelicula. Por favor intentelo nuevamente.", $logeado);
        }
        else{
            $id_genero=$_POST['select_genero'];
            $generoElegido=$this->modelGenero->GetGeneroID($id_genero);
            $peliculasFiltradas=$this->model->getPeliculaPorGenero($generoElegido->id_genero);
            $genero=$this->modelGenero->GetGeneros();
            $this->view->showTablaPeliculas($peliculasFiltradas,$generoElegido, $genero, $logeado);
        }
    }

    function MostrarMasInformacionPelicula($params=null){
        $logeado=$this->controllerUser->checkLoggedIn();
        $idPelicula=$params[':ID'];
        $datosPelicula=$this->model->getPeliculaID($idPelicula);
        $this->view->showMasPelicula($datosPelicula, $logeado);
    }

}