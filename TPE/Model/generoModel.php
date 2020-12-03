<?php

class generoModel{

    //ATRIBUTO
    private $db;

    //CONSTRUCTOR
    function __construct(){
        $this ->db =new PDO('mysql:host=localhost;'.'dbname=cinema;charset=utf8', 'root', '');
    }

    //OBTENER GENEROS
    function GetGeneros() {
        $sentencia =$this->db->prepare('SELECT * FROM genero');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //OBTENER GENERO
    function getGeneroID($id_genero){
        $sentencia = $this->db->prepare("SELECT * FROM genero WHERE id_genero=?");
        $sentencia->execute(array($id_genero));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    //INSERTAR GENERO
    function insertarGenero($tipo) {
        $sentencia = $this->db->prepare("INSERT INTO genero(tipo) VALUES (?)");
        $sentencia->execute(array($tipo));
    }

    //ELIMINAR GENERO
    function  DeleteGenero($generos_id) {
        $sentencia  = $this->db->prepare("DELETE FROM genero WHERE id_genero=?");
        $sentencia -> execute  (array($generos_id));
    }

    //EDITAR GENERO
    function UpdateGenero($genero,$id_genero){
        $sentencia  = $this->db -> prepare ( "UPDATE genero SET tipo=? WHERE id_genero =?" );
        $sentencia->execute ( array ($genero,$id_genero)); 
    }
}

