<?php

class comentarioModel{

    private $db;

    function __construct(){
        $this ->db =new PDO('mysql:host=localhost;'.'dbname=cinema;charset=utf8', 'root', '');
    }

    function getAllComentarios(){
        $sentencia= $this->db->prepare('SELECT * FROM comentario');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getComentario($id){
        $sentencia= $this->db->prepare('SELECT * FROM comentario WHERE id_comentario=?');
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function deleteComentario($id){
        $sentencia= $this->db->prepare('DELETE FROM comentario WHERE id_comentario=?');
        $sentencia->execute(array($id));
    }
    
    function insertComentario($texto, $puntuacion, $idPeli, $idUsuario){
        $sentencia=$this->db->prepare("INSERT INTO comentario(texto, id_puntuacion, id_pelicula, id_usuario) VALUES (?,?,?,?)");
        $sentencia->execute(array($texto, $puntuacion, $idPeli, $idUsuario));
        return $this->db->lastInsertId();
    }

    function updateComentario($id, $texto, $puntuacion, $idPeli, $idUsuario){
        $sentencia=$this->db->prepare("UPDATE comentario SET texto=?, id_puntuacion=?, id_pelicula=?, id_usuario=? WHERE id_comentario=?");
        $sentencia->execute(array($texto, $puntuacion, $idPeli, $idUsuario, $id));
        return $this->db->lastInsertId();
    }

}
