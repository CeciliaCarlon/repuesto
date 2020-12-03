<?php

include_once './View/peliculaView.php';
include_once './Model/peliculaModel.php';
include_once './Model/generoModel.php';
include_once './helper.php';

class peliculaController{
    
    //ATRIBUTOS
    private $view;
    private $model;
    private $modelGenero;
    private $helper;
    private $pelis_x_pagina;

    //CONSTRUCTOR
    function __construct(){
        $this->view = new peliculaView();
        $this->model = new peliculaModel();
        $this->modelGenero = new generoModel();
        $this->helper= new helper();
        $this->pelis_x_pagina=3;
    }

    //HOME
    function Home($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $this->view->showHome($logeado);
    }

    //TABLA PELICULAS
    function TablaPeliculas($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        //la pagina en la que estamos parados
        $pagina=$params[':PAGE'];
        //la posicion de los valores de la BBDD 
        $empezarDesde=($pagina-1)*$this->pelis_x_pagina;
        $Allpeliculas= $this->model->getAllDataPaginada($empezarDesde, $this->pelis_x_pagina);
        $generos=$this->modelGenero->GetGeneros();
        $peliculas= $this->model->getPeliculas();
        $totalPelis=count($peliculas);
        //la cantidad de peliculas que queremos mostrar dividido la cantidad de paginas que se necesitan 
        //se redondea para arriba con el ceil()
        $totalPaginas= ceil($totalPelis/$this->pelis_x_pagina);
        $paginas=[];
        for($i=0; $i<$totalPaginas; $i++){
            array_push($paginas, $i);
        }
        $accion= "peliculas";
        $this->view->showTablaPeliculas($Allpeliculas, $generos, $generos, $paginas, $accion, $logeado);
    }

    //FORMULARIO PARA INSERTAR PELICULA
    function MostrarFormularioInsertarPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $genero=$this->modelGenero->GetGeneros();
        $this->view->showFormularioInsertarPelicula($genero, $logeado);
    }

    //INSERTAR PELICULA
    function InsertarPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if(empty($_POST['input_titulo']) || !isset($_POST['input_titulo']) || empty($_POST['input_descripcion']) || 
        !isset($_POST['input_descripcion']) || empty($_POST['input_director']) || !isset($_POST['input_director']) || 
        empty($_POST['input_estreno']) || !isset($_POST['input_estreno']) || empty($_POST['select_genero']) || !isset($_POST['select_genero'])){
            $this->view->showError("No se pudo insertar la pelicula. Por favor complete todos los campos.", $logeado);
        }
        else if($logeado==null || !$logeado->administrador){
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
                $this->model->insertarPelicula($titulo, $descripcion, $director, $estreno, $genero, null);
            }
            $this->view->showTablaPeliculasLocation();
        }  
    }

    //FORMULARIO PARA EDITAR PELICULA
    function MostrarFormularioEditarPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $idPelicula=$params[':ID'];
        $datosPeliculaPorEditar=$this->model->getPeliculaID($idPelicula);
        $genero=$this->modelGenero->GetGeneros();
        $this->view->showFormularioEditarPelicula($genero,$datosPeliculaPorEditar, $logeado);
    }

    //EDITAR PELICULA
    function EditarPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if(empty($_POST['editar_titulo_input']) || !isset($_POST['editar_titulo_input']) || empty($_POST['editar_descripcion_input']) || 
        !isset($_POST['editar_descripcion_input']) || empty($_POST['editar_director_input']) || !isset($_POST['editar_director_input']) || 
        empty($_POST['editar_estreno_input']) || !isset($_POST['editar_estreno_input']) || empty($_POST['editar_genero_select']) || 
        !isset($_POST['editar_genero_select'])){
            $this->view->showError("No se pudo editar la pelicula. Por favor complete todos los campos.", $logeado);
        }
        else if ($logeado==null || !$logeado->administrador){
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
                $peli=$this->model->getPeliculaID($idPelicula);
                $this->model->borrarImagenPelicula($peli);
                $this->model->updateTablaPelicula($idPelicula, $titulo, $descripcion, $director, $estreno, $genero, $_FILES['editar_imagen_input']['tmp_name']);
            }
            else{
                $this->model->updateTablaPeliculaSinImagen($idPelicula, $titulo, $descripcion, $director, $estreno, $genero);
            }
            $this->view->showTablaPeliculasLocation();
        }
    }

    //ELIMINAR PELICULA
    function DeletePelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if($logeado==null || !$logeado->administrador){
            $this->view->showError("No se puede realizar esta accion si no es administrador", $logeado);
        }
        else{
            $idPelicula=$params[':ID'];
            $this->model->borrarPeliculaDB($idPelicula);
            $this->view->showTablaPeliculasLocation();
        }
    }

    //ELIMINAR IMAGEN DE PELICULA
    function DeleteImagenPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if($logeado==null || !$logeado->administrador){
            $this->view->showError("No se puede realizar esta accion si no es administrador", $logeado);
        }
        else{
            $idPelicula=$params[':ID'];
            $pelicula=$this->model->getPeliculaID($idPelicula);
            $this->model->borrarImagenPelicula($pelicula);
            $this->view->showTablaPeliculasLocation();
        }
    }

    //FILTRAR PELICULA POR GENERO
    function FiltrarPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        //se obtiene el id del genero por parametro
        $id_genero=$params[':ID'];
        $generoElegido=$this->modelGenero->GetGeneroID($id_genero);
        //se obtiene en que pagina se esta posicionado por parametro
        $pagina=$params[':PAGE'];
        $empezarDesde=($pagina-1)*$this->pelis_x_pagina;
        //buscar las peliculas paginadas y por genero
        $peliculasFiltradas=$this->model->getPeliculasPorGeneroPaginada($generoElegido->id_genero, $empezarDesde, $this->pelis_x_pagina);
        $generos=$this->modelGenero->GetGeneros();
        $peliculas= $this->model->getPeliculasPorGenero($id_genero);
        $totalPelis=count($peliculas);
        //la cantidad de peliculas que queremos mostrar dividido la cantidad de paginas que se necesitan 
        //se redondea para arriba con el ceil()
        $totalPaginas= ceil($totalPelis/$this->pelis_x_pagina);
        $paginas=[];
        for($i=0; $i<$totalPaginas; $i++){
            array_push($paginas, $i);
        }
        $accion= "filtrarPelicula/$id_genero";
        $this->view->showTablaPeliculas($peliculasFiltradas,$generoElegido, $generos, $paginas, $accion, $logeado);
    }

    //MOSTRAR MAS INFORMACION DE LA PELICULA
    function MostrarMasInformacionPelicula($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $idPelicula=$params[':ID'];
        $datosPelicula=$this->model->getPeliculaID($idPelicula);
        $this->view->showMasPelicula($datosPelicula, $logeado);
    }
}