<?php

include_once './View/peliculaView.php';
include_once './Model/peliculaModel.php';
include_once './Model/generoModel.php';
include_once './helper.php';

class peliculaController{

    private $view;
    private $model;
    private $modelGenero;
    private $helper;
    private $pelis_x_pagina;

    function __construct(){
        $this->view = new peliculaView();
        $this->model = new peliculaModel();
        $this->modelGenero = new generoModel();
        $this->helper= new helper();
        $this->pelis_x_pagina=3;
    }

    function Home($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $this->view->showHome($logeado);
    }

    function TablaPeliculas($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        //la cantidad de peliculas que queremos que aparezcan por pagina
        if($params[':ID']==null){
            $pagina= intval(1);
        }
        else{
            $pagina=intval($params[':ID']);
        }
        $empezarDesde=($pagina-1)*$this->pelis_x_pagina;
        $Allpeliculas= $this->model->getAllDataPaginada($empezarDesde, $this->pelis_x_pagina);
        $generos=$this->modelGenero->GetGeneros();
        $peliculas= $this->model->getPeliculas();
        $totalPelis=count($peliculas);
        //la cantidad de paginas que se necesitan dividido la cantidad de peliculas que queremos mostrar
        $totalPaginas= ceil($totalPelis/$this->pelis_x_pagina);
        $paginas=[];
        for($i=0; $i<$totalPaginas; $i++){
            array_push($paginas, $i);
        }
        $this->view->showTablaPeliculas($Allpeliculas, $generos, $generos, $paginas, "peliculas", $logeado);
    }

    function InsertarPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
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
            if($_FILES['input_imagen']['type'] == "image/jpg" || $_FILES['input_imagen']['type'] == "image/jpeg" || 
            $_FILES['input_imagen']['type'] == "image/png"){
                $this->model->insertarPelicula($titulo, $descripcion, $director, $estreno, $genero, $_FILES['input_imagen']['tmp_name']);
            }
            else{
                $this->model->insertarPelicula($titulo, $descripcion, $director, $estreno, $genero);
            }
            $this->view->showTablaPeliculasLocation();
        }
        
    }

    function MostrarFormularioInsertarPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $genero=$this->modelGenero->GetGeneros();
        $this->view->showFormularioInsertarPelicula($genero, $logeado);
    }

    function MostrarFormularioEditarPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $idPelicula=$params[':ID'];
        $datosPeliculaPorEditar=$this->model->getPeliculaID($idPelicula);
        $genero=$this->modelGenero->GetGeneros();
        $this->view->showFormularioEditarPelicula($genero,$datosPeliculaPorEditar, $logeado);
    }

    function EditarPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
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
            if($_FILES['editar_imagen_input']['type'] == "image/jpg" || $_FILES['editar_imagen_input']['type'] == "image/jpeg" 
            || $_FILES['editar_imagen_input']['type'] == "image/png"){
                $this->model->updateTablaPelicula($idPelicula, $titulo, $descripcion, $director, $estreno, $genero, $_FILES['editar_imagen_input']['tmp_name']);
            }
            else{
                $this->model->updateTablaPelicula($idPelicula, $titulo, $descripcion, $director, $estreno, $genero, null);
            }
            $this->view->showTablaPeliculasLocation();
        }
    }

    function DeletePelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if($logeado==null || $logeado->administrador==false){
            $this->view->showError("No se puede realizar esta accion si no es administrador", $logeado);
        }
        else{
            $idPelicula=$params[':ID'];
            $this->model->borrarPeliculaDB($idPelicula);
            $this->view->showTablaPeliculasLocation();
        }
    }

    function DeleteImagenPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if($logeado==null || $logeado->administrador==false){
            $this->view->showError("No se puede realizar esta accion si no es administrador", $logeado);
        }
        else{
            $idPelicula=$params[':ID'];
            $this->model->borrarImagenPelicula($idPelicula);
            header("Location: ".BASE_URL."formularioEditarPelicula/".$idPelicula);
        }
    }

    function FiltrarPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if(empty($_POST['select_genero']) || !isset($_POST['select_genero'])){
            $this->view->showError("No se pudo filtrar la pelicula. Por favor intentelo nuevamente.", $logeado);
        }
        else{
            $id_genero=$_POST['select_genero'];
            $generoElegido=$this->modelGenero->GetGeneroID($id_genero);
            if($params[':ID']==null){
                $pagina= intval(1);
            }
            else{
                $pagina=intval($params[':ID']);
            }
            $empezarDesde=($pagina-1)*$this->pelis_x_pagina;
            $peliculasFiltradas=$this->model->getPeliculasPorGeneroPaginada($generoElegido->id_genero, $empezarDesde, $this->pelis_x_pagina);
            $generos=$this->modelGenero->GetGeneros();
            $peliculas= $this->model->getPeliculasPorGenero($id_genero);
            $totalPelis=count($peliculas);
            //la cantidad de paginas que se necesitan dividido la cantidad de peliculas que queremos mostrar
            $totalPaginas= ceil($totalPelis/$this->pelis_x_pagina);
            $paginas=[];
            for($i=0; $i<$totalPaginas; $i++){
                array_push($paginas, $i);
            }
            $accion= "filtrarPelicula";
            $this->view->showTablaPeliculas($peliculasFiltradas,$generoElegido, $generos, $paginas, $accion, $logeado);
        }
    }

    function MostrarMasInformacionPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $idPelicula=$params[':ID'];
        $datosPelicula=$this->model->getPeliculaID($idPelicula);
        $this->view->showMasPelicula($datosPelicula, $logeado);
    }

}