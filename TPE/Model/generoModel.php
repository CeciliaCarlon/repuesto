<?php

class generoModel{

    private $db;

    function __construct(){
        $this ->db =new PDO('mysql:host=localhost;'.'dbname=cinema;charset=utf8', 'root', '');
    }

    function GetGeneros() {
        $sentencia =$this->db->prepare('SELECT * FROM genero');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getGeneroID($id_generos){
        $sentencia = $this->db->prepare("SELECT * FROM genero WHERE id_genero=?");
        $sentencia->execute(array($id_generos));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function insertarGenero($tipo) {
        $sentencia = $this->db->prepare("INSERT INTO genero(tipo) VALUES (?)");
        $sentencia->execute(array($tipo));
    }

    function  DeleteGenero($generos_id) {
        $sentencia  = $this->db->prepare("DELETE FROM genero WHERE id_genero=?");
        $sentencia -> execute  (array($generos_id));
    }

    function UpdateGenero($genero,$id_genero){
        $sentencia  = $this->db -> prepare ( "UPDATE genero SET tipo=? WHERE id_genero =?" );
        $sentencia->execute ( array ($genero,$id_genero)); 
    }

}

