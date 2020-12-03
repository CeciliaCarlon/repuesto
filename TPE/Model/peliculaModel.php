<?php

class peliculaModel{

    //ATRIBUTO
    private $db;

    //CONSTRUCTOR
    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=cinema;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //OBTENER DATA DE LA TABLA PELICULA
    function getPeliculas(){
        $sentencia = $this->db->prepare( "SELECT * FROM pelicula" );
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //OBTENER DATA DE LA TABLA PELICULA Y GENERO PAGINADAS
    function getAllDataPaginada($empezarDesde, $pelis_x_pagina){
        $sentencia = $this->db->prepare( "SELECT * FROM pelicula INNER JOIN genero ON pelicula.id_genero=genero.id_genero ORDER BY pelicula.id_pelicula
        LIMIT $empezarDesde, $pelis_x_pagina");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //OBTENER PELICULA POR ID
    function getPeliculaID($id_pelicula){
        $sentencia = $this->db->prepare("SELECT * FROM pelicula INNER JOIN genero ON pelicula.id_genero=genero.id_genero WHERE id_pelicula=?");
        $sentencia->execute(array($id_pelicula));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    //OBTENER PELICULAS PAGINADAS POR GENERO
    function getPeliculasPorGeneroPaginada($id_genero, $empezarDesde, $pelis_x_pagina){
        $sentencia = $this->db->prepare("SELECT * FROM pelicula INNER JOIN genero ON pelicula.id_genero=genero.id_genero WHERE pelicula.id_genero=? 
        LIMIT $empezarDesde, $pelis_x_pagina");
        $sentencia->execute(array($id_genero));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //OBTENER PELICULAS POR GENERO
    function getPeliculasPorGenero($id_genero){
        $sentencia = $this->db->prepare("SELECT * FROM pelicula INNER JOIN genero ON pelicula.id_genero=genero.id_genero WHERE pelicula.id_genero=?");
        $sentencia->execute(array($id_genero));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //INSERTAR PELICULA
    function insertarPelicula($titulo, $descripcion, $director, $estreno, $id_genero, $imagen = null) {
        $pathImg = null;
        if ($imagen!==null){
            $pathImg = $this->uploadImage($imagen);
        }
        $sentencia=$this->db->prepare("INSERT INTO pelicula(titulo, descripcion, director, estreno, id_genero, imagen) VALUES (?,?,?,?,?,?)");
        $sentencia->execute(array($titulo, $descripcion, $director, $estreno, $id_genero, $pathImg));
    }

    //ELIMINAR PELICULA
    function borrarPeliculaDB($idPelicula){
        $sentencia=$this->db->prepare("DELETE FROM pelicula WHERE id_pelicula=?");
        $sentencia->execute(array($idPelicula));
        unlink($pelicula->imagen);
    }

    //ELIMINAR IMAGEN DE PELICULA
    function borrarImagenPelicula($pelicula){
        $sentencia=$this->db->prepare("UPDATE pelicula SET imagen=? WHERE id_pelicula=?");
        $sentencia->execute(array(null, $pelicula->id_pelicula));
        unlink($pelicula->imagen);
    }

    //EDITAR PELICULA SIN IMAGEN
    function updateTablaPeliculaSinImagen($id_pelicula, $titulo, $descripcion, $director, $estreno, $id_genero){
        $sentencia=$this->db->prepare("UPDATE pelicula SET titulo=?, descripcion=?, director=?, estreno=?, id_genero=? WHERE id_pelicula=?");
        $sentencia->execute(array($titulo, $descripcion, $director, $estreno, $id_genero, $id_pelicula));
    }

    //EDITAR PELICULA
    function updateTablaPelicula($id_pelicula, $titulo, $descripcion, $director, $estreno, $id_genero, $imagen=null){
        $pathImg = null;
        if ($imagen!==null){
            $pathImg = $this->uploadImage($imagen);
        }
        $sentencia=$this->db->prepare("UPDATE pelicula SET titulo=?, descripcion=?, director=?, estreno=?, id_genero=?, imagen=? WHERE id_pelicula=?");
        $sentencia->execute(array($titulo, $descripcion, $director, $estreno, $id_genero, $pathImg, $id_pelicula));
    }

    //INSERTAR IMAGEN AL PROYECTO
    private function uploadImage($imagen){
        $final_path = './images/'.uniqid().'.jpg';
        move_uploaded_file($imagen, $final_path);
        return $final_path;
    }
    
}