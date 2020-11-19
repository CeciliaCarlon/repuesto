<?php

class puntajeModel{

    private $db;

    function __construct(){
        $this ->db =new PDO('mysql:host=localhost;'.'dbname=cinema;charset=utf8', 'root', '');
    }

    function getPuntuaciones(){
        $sentencia= $this->db->prepare('SELECT * FROM puntuacion');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getPuntuacion($id){
        $sentencia=$this->db->prepare("SELECT * FROM puntuacion WHERE id=?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
}