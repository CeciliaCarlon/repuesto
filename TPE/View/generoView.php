<?php

include_once "./libs/smarty/Smarty.class.php";

class generoView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function showTablaGenero($generos){
        $this->smarty->assign('tipo',"Generos");
        $this->smarty->assign('genero', $generos);
        $this->smarty->display('./templates/tablaGenero');
    }

    function showTablaLocation(){
        header("Location: ".BASE_URL."tabla");
    }
    
    function showGeneroInsertada($generos){
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('./templates/insertarGenero.tpl');
    }

    function showGeneroEditar($generos){
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('./templates/editarGenero.tpl');
    }


    

}
