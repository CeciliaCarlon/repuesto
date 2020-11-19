<?php

include_once './View/comentarioView.php';

class comentarioController{

    private $view;

    function __construct(){
        $this->view = new comentarioView();
    }

    private function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['email'])){
            return null;
        }
        else{
            return $_SESSION['administrador'];
        }
    }

    function GetComentarios($params=null){
        $logeado=$this->checkLoggedIn();
        $this->view->showComentarios($logeado, $puntuaciones);
    }

}
