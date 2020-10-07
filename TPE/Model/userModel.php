<?php

class userModel{

    private $db;
    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=cinema;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    function getUsuario($usuario){
        $sentencia = $this->db->prepare("SELECT * FROM usuarios WHERE email=?");
        $sentencia->execute(array($usuario));
        $usuarioDB=$sentencia->fetch(PDO::FETCH_OBJ);
        return $usuarioDB;
    }

}   