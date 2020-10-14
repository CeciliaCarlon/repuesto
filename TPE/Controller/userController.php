<?php

include_once './View/userView.php';
include_once './Model/userModel.php';

class userController{

    private $view;
    private $model;

    function __construct(){

        $this->view = new userView();
        $this->model = new userModel();

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

    function Login(){
        $logeado=$this->checkLoggedIn();
        $this->view->showLogin($logeado);
    }

    function Logout(){
        session_start();
        session_destroy();
        $logeado=$this->checkLoggedIn();
        $this->view->showHomeLocation($logeado);
    }

    function VerificarUsuario(){
        $logeado=$this->checkLoggedIn();
        if (empty($_POST['input_email_login']) || !isset($_POST['input_email_login']) || 
        empty($_POST['input_contraseña_login']) || !isset($_POST['input_contraseña_login'])){
            $this->view->showError("No se pudo iniciar sesion. Por favor complete todos los campos.", $logeado);
        }
        else{
            $email=$_POST['input_email_login'];
            $password=$_POST['input_contraseña_login'];
            $usuarioDB=$this->model->getUsuario($email);

            if(isset($usuarioDB) && $usuarioDB){
                if(password_verify($password, $usuarioDB->password)){
                    session_start();
                    $_SESSION["email"] = $usuarioDB->email;

                    $this->view->showHomeLocation();
                }
                else{
                    $this->view->showError("La password ingresada es incorrecta. Por favor intente nuevamente", $logeado);
                }
            }
            else{
                $this->view->showError("El email ingresado no esta registrado. Por favor intente nuevamente", $logeado);
            }
        }
    }

    

   
}    