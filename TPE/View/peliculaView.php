<?php

include_once "./libs/smarty/Smarty.class.php";

class peliculaView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }


    function showHome($logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->display('./templates/home.tpl');
    }
 
    function showTablaPeliculas($peliculas, $generos, $allGeneros, $paginacion, $accion, $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('accion' , $accion);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->assign('peliculas', $peliculas);
        $this->smarty->assign('generos', $generos);
        $this->smarty->assign('allGeneros', $allGeneros);
        $this->smarty->assign('paginacion', $paginacion);
        $this->smarty->display('./templates/tablaPelicula.tpl');
    }
    
    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showTablaPeliculasLocation(){
        header("Location: ".BASE_URL."peliculas/pagina/1");
    }

    function showFormularioInsertarPelicula($generos, $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('./templates/insertarPelicula.tpl');
    }

    function showFormularioEditarPelicula($generos,$datosPeliculaPorEditar, $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->assign('generos', $generos);
        $this->smarty->assign('datosPeliculaPorEditar', $datosPeliculaPorEditar);
        $this->smarty->display('./templates/editarPelicula.tpl');
    }

    function showError($mensaje=" ", $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('./templates/error.tpl');
    }

    function showMasPelicula($pelicula, $logeado){
        $this->smarty->assign('BASE_URL' , BASE_URL);
        $this->smarty->assign('logeado',$logeado);
        $this->smarty->assign('pelicula', $pelicula);
        $this->smarty->display('./templates/soloPagePelicula.tpl');
    }


}