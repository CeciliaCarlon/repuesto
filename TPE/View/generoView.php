<?php
include_once "./libs/smarty/Smarty.class.php";

class generoView{

    //ATRIBUTO
    private $smarty;

    //CONSTRUCTOR
    function __construct(){
        $this->smarty = new Smarty();
    }

    //REDIRIGIR A TABLA GENERO
    function showTablaGenerosLocation(){
        header("Location: ".BASE_URL."generos");
    }

    //TABLA GENEROS
    function showTablaGenero($generos, $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('generos', $generos);
        $this->smarty->assign('logeado', $logeado);
        $this->smarty->display('./templates/tablaGenero.tpl');
    }
    
    //FORMULARIO INSERTAR GENERO
    function showFormularioInsertarGenero($generos, $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('./templates/insertarGenero.tpl');
    }

    //FORMULARIO EDITAR GENERO
    function showFormularioEditarGenero($genero,$datosGeneroPorEditar, $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->assign('genero', $genero);
        $this->smarty->assign('datosGeneroPorEditar', $datosGeneroPorEditar);
        $this->smarty->display('./templates/editarGenero.tpl');
    }

    //MENSAJE ERROR
    function showError($mensaje=" ", $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('./templates/error.tpl');
    }
}
