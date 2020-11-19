<?php

include_once "./libs/smarty/Smarty.class.php";

class userView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showTablaUsuarioLocation(){
        header("Location: ".BASE_URL."usuarios");
    }

    function showLogin($logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->display('./templates/login.tpl');
    }

    function showFormularioRegistrarse($logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->display('./templates/registrarse.tpl');
    }

    function showError($mensaje=" ", $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->display('./templates/error.tpl');
    }

    function showTablaUsuario($usuarios, $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->assign('logeado',$logeado);
        //$this->smarty->assign('admin',$admin);
        $this->smarty->display('./templates/tablaUsuarios.tpl');
    }
}    