<?php

include_once "./libs/smarty/Smarty.class.php";

class userView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showHome(){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->display('./templates/home.tpl');
    }

    function showLogin(){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->display('./templates/login.tpl');
    }

    function showError($mensaje=" "){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('./templates/error.tpl');
    }
}    