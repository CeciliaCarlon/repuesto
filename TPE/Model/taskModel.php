<?php

class taskModel{

    private $db;
    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=cinema;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    function getDatosPelicula(){
        $sentencia = $this->db->prepare( "SELECT * FROM pelicula");
        $sentencia->execute();
        $tareas=$sentencia->fetchAll(PDO::FETCH_OBJ);

        return $tareas;
    }

    function getDatosGenero(){
        $sentencia = $this->db->prepare( "SELECT * FROM genero");
        $sentencia->execute();
        $tareas=$sentencia->fetchAll(PDO::FETCH_OBJ);

        return $tareas;
    }

    function insertarPelicula($titulo, $descripcion, $director, $estreno, $id_genero){
        $sentencia=$this->db->prepare("INSERT INTO pelicula(titulo, descripcion, director, estreno, id_genero) VALUES (?,?,?,?,?)");
        $sentencia->execute(array($titulo, $descripcion, $director, $estreno, $id_genero));
    }

    function getPeliculaPorGenero(){
        $sentencia = $this->db->prepare( "SELECT * FROM pelicula INNER JOIN genero ON pelicula.id_genero=genero.id" );
        $sentencia->execute();
        $peliculaConGenero=$sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
}