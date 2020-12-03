<?php

include_once 'Model/userModel.php';

class helper{

    //ATRIBUTO
    private $modelUser;

    //CONSTRUCTOR
    function __construct(){
        $this->modelUser= new userModel();
    }

    //CHEQUEAR SI LA SESION SE INICIO Y RETORTAN INFORMACION DEL USUARIO
    function checkLoggedInAndReturnUserInfo(){
        session_start();
        if(!isset($_SESSION['email'])){
            return null;
        }
        else{
            return $this->modelUser->getUsuario($_SESSION['email']);
        }
    }

    //REDIRIGIR A HOME
    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
}