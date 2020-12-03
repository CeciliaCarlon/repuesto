<?php

class userModel{

    //ATRIBUTO
    private $db;

    //CONSTRUCTOR
    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=cinema;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //OBTENER USUARIOS
    function getUsuarios(){
        $sentencia=$this->db->prepare("SELECT * FROM usuario");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //OBTENER USUSARIO
    function getUsuario($usuario){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE email=?");
        $sentencia->execute(array($usuario));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    //CREAR USUARIO
    function crearUsuario($mail, $password, $admin){
        $sentencia= $this->db->prepare("INSERT INTO usuario(email, password, administrador) VALUES (?,?,?)");
        $sentencia->execute(array($mail, $password, $admin));
    }

    //ELIMINAR USUARIO
    function borrarUsuario($idUsuario){
        $sentencia= $this->db->prepare("DELETE FROM usuario WHERE id_usuario=?");
        $sentencia->execute(array($idUsuario));
    }

    //ESTABLECER PRIVILEGIOS
    function setPrivilegio($admin, $idUsuario){
        $sentencia=$this->db->prepare("UPDATE usuario SET administrador=? WHERE id_usuario=?");
        $sentencia->execute(array($admin, $idUsuario));
    }
}   