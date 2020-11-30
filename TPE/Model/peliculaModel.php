<?php

class peliculaModel{

    private $db;
    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=cinema;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    function getDatosPelicula(){
        $sentencia = $this->db->prepare( "SELECT * FROM pelicula");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getAllDataPaginada($empezarDesde, $pelis_x_pagina){
        $sentencia = $this->db->prepare( "SELECT * FROM pelicula INNER JOIN genero ON pelicula.id_genero=genero.id_genero 
        LIMIT $empezarDesde, $pelis_x_pagina");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getPeliculas(){
        $sentencia = $this->db->prepare( "SELECT * FROM pelicula" );
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getPeliculaID($id_pelicula){
        $sentencia = $this->db->prepare("SELECT * FROM pelicula INNER JOIN genero ON pelicula.id_genero=genero.id_genero WHERE id_pelicula=?");
        $sentencia->execute(array($id_pelicula));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getPeliculasPorGeneroPaginada($id_genero, $empezarDesde, $pelis_x_pagina){
        $sentencia = $this->db->prepare("SELECT * FROM pelicula INNER JOIN genero ON pelicula.id_genero=genero.id_genero WHERE pelicula.id_genero=? 
        LIMIT $empezarDesde, $pelis_x_pagina");
        $sentencia->execute(array($id_genero));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getPeliculasPorGenero($id_genero){
        $sentencia = $this->db->prepare("SELECT * FROM pelicula INNER JOIN genero ON pelicula.id_genero=genero.id_genero WHERE pelicula.id_genero=?");
        $sentencia->execute(array($id_genero));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function insertarPelicula($titulo, $descripcion, $director, $estreno, $id_genero, $imagen = null) {
        $pathImg = null;
        if ($imagen!==null){
            $pathImg = $this->uploadImage($imagen);
        }
        $sentencia=$this->db->prepare("INSERT INTO pelicula(titulo, descripcion, director, estreno, id_genero, imagen) VALUES (?,?,?,?,?,?)");
        $sentencia->execute(array($titulo, $descripcion, $director, $estreno, $id_genero, $pathImg));
    }

    function borrarPeliculaDB($idPelicula){
        $sentencia=$this->db->prepare("DELETE FROM pelicula WHERE id_pelicula=?");
        $sentencia->execute(array($idPelicula));
    }

    function borrarImagenPelicula($idPelicula){
        $sentencia=$this->db->prepare("UPDATE pelicula SET imagen=? WHERE id_pelicula=?");
        $sentencia->execute(array(null, $idPelicula));
    }

    function updateTablaPelicula($id_pelicula, $titulo, $descripcion, $director, $estreno, $id_genero, $imagen=null){
        $pathImg = null;
        if ($imagen!==null){
            $pathImg = $this->uploadImage($imagen);
        }
        $sentencia=$this->db->prepare("UPDATE pelicula SET titulo=?, descripcion=?, director=?, estreno=?, id_genero=?, imagen=? WHERE id_pelicula=?");
        $sentencia->execute(array($titulo, $descripcion, $director, $estreno, $id_genero, $pathImg, $id_pelicula));
    }

    private function uploadImage($imagen){
        $final_path = './images/'.uniqid().'.jpg';
        move_uploaded_file($imagen, $final_path);
        return $final_path;
    }
    
}