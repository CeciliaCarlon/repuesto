<?php
include_once "./libs/smarty/Smarty.class.php";

class generoView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function showTablaGenero($generos, $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('generos', $generos);
        $this->smarty->assign('logeado', $logeado);
        $this->smarty->display('./templates/tablaGenero.tpl');
    }
     
    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showTablaGenerosLocation(){
        header("Location: ".BASE_URL."generos");
    }
    
    function showFormularioInsertarGenero($generos, $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('./templates/insertarGenero.tpl');
    }

    function showFormularioEditarGenero($genero,$datosGeneroPorEditar, $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->assign('genero', $genero);
        $this->smarty->assign('datosGeneroPorEditar', $datosGeneroPorEditar);
        $this->smarty->display('./templates/editarGenero.tpl');
    }

    function showError($mensaje=" ", $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('./templates/error.tpl');
    }

    

}
