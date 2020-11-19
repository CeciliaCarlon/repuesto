<?php

include_once "./libs/smarty/Smarty.class.php";

class comentarioView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showComentarios($logeado, $puntuaciones){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->assign('puntuaciones',$puntuaciones);
        $this->smarty->display('./templates/comentarios.tpl');
    }

}
