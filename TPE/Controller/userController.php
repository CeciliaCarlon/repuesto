<?php

include_once './View/userView.php';
include_once './Model/userModel.php';
include_once './helper.php';

class userController{

    private $view;
    private $model;
    private $helper;

    function __construct(){
        $this->view = new userView();
        $this->model = new userModel();
        $this->helper= new helper();
    }

    function Login($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $this->view->showLogin($logeado);
    }

    function Logout($params=null){
        session_start();
        session_destroy();
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $this->view->showHomeLocation($logeado);
    }

    function MostrarFormularioRegistrarse($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $this->view->showFormularioRegistrarse($logeado);
    }

    function TablaUsuarios($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $usuarios=$this->model->getUsuarios();
        $this->view->showTablaUsuario($usuarios, $logeado);
    }

    function DeleteUsuario($params=null){
        $idUsuario=$params[':ID'];
        $this->model->borrarUsuario($idUsuario);
        $this->view->showTablaUsuarioLocation();
    }

    function EstablecerComoAdmin($params=null){
        $idUsuario=$params[':ID'];
        $admin=true;
        $this->model->setAdmin($admin,$idUsuario);
        $this->view->showTablaUsuarioLocation();
    }

    function QuitarComoAdmin($params=null){
        $idUsuario= $params[':ID'];
        $admin=false;
        $this->model->setAdmin($admin,$idUsuario);
        $this->view->showTablaUsuarioLocation();
    }

    function Registrar($params=null){
        $email=$_POST['input_email'];
        $password=$_POST['input_contraseña'];
        $confirmacionPassword= $_POST['input_confirmacion_contraseña'];
        $admin= 0;//chequear que no exista el email.
        if (empty($email) || !isset($email) || empty($password) || !isset($password) 
        || empty($confirmacionPassword) || !isset($confirmacionPassword)){
            $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
            $this->view->showError("No se pudo resgistrar. Por favor complete todos los campos.", $logeado);
        }
        else{
            if($password!=$confirmacionPassword){
                $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
                $this->view->showError("No se pudo resgistrar. La contraseña es diferente.", $logeado);
            }
            else{
                $passwordEncriptada= password_hash($password, PASSWORD_DEFAULT);
                $this->model->crearUsuario($email, $passwordEncriptada, $admin);
                $this->VerificarUsuario(null);
            }
        }
    }

    function VerificarUsuario($params=null){
        $email=$_POST['input_email'];
        $password=$_POST['input_contraseña'];
        if (empty($email) || !isset($email) || empty($password) || !isset($password)){
            $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
            $this->view->showError("No se pudo iniciar sesion. Por favor complete todos los campos.", $logeado);
        }
        else{
            $usuarioDB=$this->model->getUsuario($email);
            if(isset($usuarioDB) && $usuarioDB){
                if(password_verify($password, $usuarioDB->password)){
                    session_start();
                    $_SESSION["email"] = $usuarioDB->email;
                    $_SESSION["administrador"]= $usuarioDB->administrador;
                    $this->view->showHomeLocation();
                }
                else{
                    $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
                    $this->view->showError("La password ingresada es incorrecta. Por favor intente nuevamente", $logeado);
                }
            }
            else{
                $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
                $this->view->showError("El email ingresado no esta registrado. Por favor intente nuevamente", $logeado);
            }
        }
    }

    

   
}    