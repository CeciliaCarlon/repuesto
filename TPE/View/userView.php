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

    function showLogin($logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->display('./templates/login.tpl');
    }

    function showError($mensaje=" ", $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->display('./templates/error.tpl');
    }
}    