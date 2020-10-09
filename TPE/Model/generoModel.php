<?php

class generoModel{

    private $db;

    function __construct(){
        $this ->db =new PDO('mysql:host=localhost;'.'dbname=cinema;charset=utf8', 'root', '');
    }

    function GetGeneros() {
        $sentencia =$this->db->prepare('SELECT * FROM genero');
        $sentencia->execute();
        $generos=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $generos;
    }

    function GetGeneroID($id_generos){
        $sentencia = $this->db->prepare("SELECT * FROM genero WHERE id=?");
        $sentencia->execute(array($id_generos));
        $genero=$sentencia->fetch(PDO::FETCH_OBJ);
        return $genero;
    }

    function insertTask($tipo) {
        $sentencia = $this->db->prepare('INSERT INTO genero(tipo) VALUES (?)');
        $sentencia->execute(array($tipo));
    }

    function  DeleteGenero($generos_id) {
        $sentencia  = $this->db->prepare("DELETE FROM genero WHERE id=?");
        $sentencia -> execute  (array($generos_id));
    }


    function  EditarGenero($generos_id) {  
        $sentencia  = $this->db -> prepare ( "UPDATE genero SET  WHERE id =?" );
        $sentencia->execute  ( array ($generos_id ));
    }

    function UpdateTask($generos_id){
        $sentencia  = $this->db -> prepare ( "UPDATE genero SET  WHERE genero_id =?" );
        $sentencia->execute ( array ($generos_id ));
        
    }

}

