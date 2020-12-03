<?php

class comentarioModel{

    //ATRIBUTO
    private $db;

    //CONSTRUCTOR
    function __construct(){
        $this ->db =new PDO('mysql:host=localhost;'.'dbname=cinema;charset=utf8', 'root', '');
    }

    //OBTENER COMENTARIOS
    function getAllComentarios(){
        $sentencia= $this->db->prepare('SELECT * FROM comentario');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //OBTENER COMENTARIOS POR PELICULA
    function getComentarioPorPeli($idPeli){
        $sentencia= $this->db->prepare('SELECT * FROM comentario WHERE id_pelicula=?');
        $sentencia->execute(array($idPeli));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //OBTENER COMENTARIO
    function getComentario($id){
        $sentencia= $this->db->prepare('SELECT * FROM comentario WHERE id_comentario=?');
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    //ELIMINAR COMENTARIO
    function deleteComentario($id){
        $sentencia= $this->db->prepare('DELETE FROM comentario WHERE id_comentario=?');
        $sentencia->execute(array($id));
    }
    
    //INSERTAR COMENTARIO
    function insertComentario($texto, $puntuacion, $idPeli, $idUsuario){
        $sentencia=$this->db->prepare("INSERT INTO comentario(texto, puntuacion, id_pelicula, id_usuario) VALUES (?,?,?,?)");
        $sentencia->execute(array($texto, $puntuacion, $idPeli, $idUsuario));
        return $this->db->lastInsertId();
    }

    //EDITAR COMENTARIO
    function updateComentario($id, $texto, $puntuacion, $idPeli, $idUsuario){
        $sentencia=$this->db->prepare("UPDATE comentario SET texto=?, puntuacion=?, id_pelicula=?, id_usuario=? WHERE id_comentario=?");
        $sentencia->execute(array($texto, $puntuacion, $idPeli, $idUsuario, $id));
        return $this->db->lastInsertId();
    }
}
