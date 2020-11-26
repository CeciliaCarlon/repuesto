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

    function getAllData(){
        $sentencia = $this->db->prepare( "SELECT * FROM pelicula INNER JOIN genero ON pelicula.id_genero=genero.id_genero" );
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getPaginacion(){
        $sentencia = $this->db->prepare( "SELECT * FROM pelicula INNER JOIN genero ON pelicula.id_genero=genero.id_genero" );
        $sentencia->execute();

        $totalPelis=$sentencia->rowCount();
        $pelis_x_pagina=3;
        $paginas=$totalPelis/$pelis_x_pagina;
        return ceil($paginas);
    }

    function getPeliculaID($id_pelicula){
        $sentencia = $this->db->prepare("SELECT * FROM pelicula INNER JOIN genero ON pelicula.id_genero=genero.id_genero WHERE id_pelicula=?");
        $sentencia->execute(array($id_pelicula));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getPeliculaPorGenero($id_genero){
        $sentencia = $this->db->prepare("SELECT * FROM pelicula INNER JOIN genero ON pelicula.id_genero=genero.id_genero WHERE pelicula.id_genero=?");
        $sentencia->execute(array($id_genero));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function insertarPelicula($titulo, $descripcion, $director, $estreno, $id_genero){
        $sentencia=$this->db->prepare("INSERT INTO pelicula(titulo, descripcion, director, estreno, id_genero) VALUES (?,?,?,?,?)");
        $sentencia->execute(array($titulo, $descripcion, $director, $estreno, $id_genero));
    }

    function borrarPeliculaDB($idPelicula){
        $sentencia=$this->db->prepare("DELETE FROM pelicula WHERE id_pelicula=?");
        $sentencia->execute(array($idPelicula));
    }

    function updateTablaPelicula($id_pelicula, $titulo, $descripcion, $director, $estreno, $id_genero){
        $sentencia=$this->db->prepare("UPDATE pelicula SET titulo=?, descripcion=?, director=?, estreno=?, id_genero=? WHERE id_pelicula=?");
        $sentencia->execute(array($titulo, $descripcion, $director, $estreno, $id_genero, $id_pelicula));
    }
    
}