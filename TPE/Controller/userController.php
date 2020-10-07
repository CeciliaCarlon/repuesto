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

    function Login(){
        $this->view->showLogin();
    }

    function VerificarUsuario(){
        if (empty($_POST['input_email_login']) || !isset($_POST['input_email_login']) || 
        empty($_POST['input_contraseña_login']) || !isset($_POST['input_contraseña_login'])){
            $this->view->showError("No se pudo iniciar sesion. Por favor complete todos los campos.");
        }
        else{
            $email=$_POST['input_email_login'];
            $password=$_POST['input_contraseña_login'];
            $usuarioDB=$this->model->getUsuario($email);

            if(isset($usuarioDB) && $usuarioDB){
                if(password_verify($password, $usuarioDB->password)){
                    session_start();
                    $_SESSION["email"] = $usuarioDB->email;

                    header("Location: ".BASE_URL."home");
                }
                else{
                    $this->view->showError("La password ingresada es incorrecta. Por favor intente nuevamente");
                }
            }
            else{
                $this->view->showError("El email ingresado no esta registrado. Por favor intente nuevamente");
            }
        }
    }

    /*
function VerifyUser(){
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];

        if(isset($user)){
            $userFromDB = $this->model->GetUser($user);

            if(isset($userFromDB) && $userFromDB){
                // Existe el usuario

                if (password_verify($pass, $userFromDB->password)){

                    session_start();
                    $_SESSION["EMAIL"] = $userFromDB->email;
                    $_SESSION['LAST_ACTIVITY'] = time();

                    header("Location: ".BASE_URL."home");
                }else{
                    $this->view->ShowLogin("Contraseña incorrecta");
                }

            }else{
                // No existe el user en la DB
                $this->view->ShowLogin("El usuario no existe");
            }
        }
    }

    */
}    