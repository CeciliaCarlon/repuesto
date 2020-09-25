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

        $peliConGenero=$this->model->getPeliculaPorGenero();
        $pelicula=$this->model->getDatosPelicula();
        $genero=$this->model->getDatosGenero();
        $this->view->showDatos($pelicula, $genero);
    }

    function Insertar(){
        $pelicula=$this->model->getDatosPelicula();
        $genero=$this->model->getDatosGenero();
        $this->model->insertarPelicula($_POST['input_titulo'], $_POST['input_descripcion'], $_POST['input_director'], $_POST['input_estreno'], $_POST['select_genero']);
        $this->Home();
    }

}