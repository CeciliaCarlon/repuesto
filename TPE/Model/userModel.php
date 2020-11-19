<?php

class userModel{

    private $db;
    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=cinema;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    function getUsuario($usuario){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE email=?");
        $sentencia->execute(array($usuario));
        $usuarioDB=$sentencia->fetch(PDO::FETCH_OBJ);
        return $usuarioDB;
    }

    function crearUsuario($mail, $password, $admin){
        $sentencia= $this->db->prepare("INSERT INTO usuario(email, password, administrador) VALUES (?,?,?)");
        $sentencia->execute(array($mail, $password, $admin));
    }

    function getUsuarios(){
        $sentencia=$this->db->prepare("SELECT * FROM usuario");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function borrarUsuario($idUsuario){
        $sentencia= $this->db->prepare("DELETE FROM usuario WHERE id_usuario=?");
        $sentencia->execute(array($idUsuario));
    }

    function setAdmin($admin, $idUsuario){
        $sentencia=$this->db->prepare("UPDATE usuario SET administrador=? WHERE id_usuario=?");
        $sentencia->execute(array($admin, $idUsuario));
    }

}   