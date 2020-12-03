<?php

include_once './View/userView.php';
include_once './Model/userModel.php';
include_once './helper.php';

class userController{

    //ATRIBUTOS
    private $view;
    private $model;
    private $helper;

    //CONSTRUCTOR
    function __construct(){
        $this->view = new userView();
        $this->model = new userModel();
        $this->helper= new helper();
    }

    //TABLA USUARIOS
    function TablaUsuarios($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if($logeado == null || !$logeado->administrador){
            $this->view->showError("No se permite el acceso a estos datos.", $logeado);
        }
        else{
            $usuarios=$this->model->getUsuarios();
            $this->view->showTablaUsuario($usuarios, $logeado);
        }
    }

    //FORMULARIO PARA INICIAR SESION
    function MostrarFormularioLogin($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $this->view->showLogin($logeado);
    }

    //VERIFICAR USUARIO
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
                    $this->helper->showHomeLocation();
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

    //CERRAR SESION
    function Logout($params=null){
        session_start();
        session_destroy();
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $this->helper->showHomeLocation($logeado);
    }

    //FORMULARIO PARA REGISTRARSE
    function MostrarFormularioRegistrarse($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $this->view->showFormularioRegistrarse($logeado);
    }

    //REGISTRARSE
    function Registrar($params=null){
        $email=$_POST['input_email'];
        $password=$_POST['input_contraseña'];
        $confirmacionPassword= $_POST['input_confirmacion_contraseña'];
        $admin= false;
        if (empty($email) || !isset($email) || empty($password) || !isset($password) 
        || empty($confirmacionPassword) || !isset($confirmacionPassword)){
            $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
            $this->view->showError("No se pudo resgistrar. Por favor complete todos los campos.", $logeado);
        }
        else{
            $emailExistente= $this->model->getUsuario($email);
            if($emailExistente==null){
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
            else{
                $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
                $this->view->showError("No se pudo resgistrar. Ya existe un usuario con ese email.", $logeado);
            }
        }
    }

    //ELIMINAR USUARIO
    function DeleteUsuario($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if($logeado == null || !$logeado->administrador){
            $this->view->showError("No se permite el acceso a estos datos.", $logeado);
        }
        else{
            $idUsuario=$params[':ID'];
            $this->model->borrarUsuario($idUsuario);
            $this->view->showTablaUsuarioLocation();
        }
    }

    //ESTABLECER COMO ADMINISTRADOR
    function EstablecerComoAdmin($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if($logeado == null || !$logeado->administrador){
            $this->view->showError("No se permite el acceso a estos datos.", $logeado);
        }
        else{
            $idUsuario=$params[':ID'];
            $admin=true;
            $this->model->setPrivilegio($admin,$idUsuario);
            $this->view->showTablaUsuarioLocation();
        }
    }

    //QUITAR COMO ADMINISTRADOR
    function QuitarComoAdmin($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if($logeado == null || !$logeado->administrador){
            $this->view->showError("No se permite el acceso a estos datos.", $logeado);
        }
        else{
            $idUsuario= $params[':ID'];
            $admin=false;
            $this->model->setPrivilegio($admin,$idUsuario);
            $this->view->showTablaUsuarioLocation();
        }
    }
}    