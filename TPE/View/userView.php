<?php

include_once "./libs/smarty/Smarty.class.php";

class userView{

    //ATRIBUTO
    private $smarty;

    //CONSTRUCTOR
    function __construct(){
        $this->smarty = new Smarty();
    }

    //REDIRIGIR A TABLA USUARIO
    function showTablaUsuarioLocation(){
        header("Location: ".BASE_URL."usuarios");
    }

    //TABLA USUARIOS
    function showTablaUsuario($usuarios, $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->assign('logeado',$logeado);
        //$this->smarty->assign('admin',$admin);
        $this->smarty->display('./templates/tablaUsuarios.tpl');
    }

    //FORMULARIO INICIAR SESION
    function showLogin($logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->display('./templates/login.tpl');
    }

    //FORMULARIO REGISTRARSE
    function showFormularioRegistrarse($logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->display('./templates/registrarse.tpl');
    }
}    