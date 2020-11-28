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

    function getGeneroID($id_genero){
        $sentencia = $this->db->prepare("SELECT * FROM genero WHERE id_genero=?");
        $sentencia->execute(array($id_genero));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

   

    function  DeleteGenero($generos_id) {
        $sentencia  = $this->db->prepare("DELETE FROM genero WHERE id_genero=?");
        $sentencia -> execute  (array($generos_id));
    }

    function UpdateGenero($genero,$id_genero){
        $sentencia  = $this->db -> prepare ( "UPDATE genero SET tipo=? WHERE id_genero =?" );
        $sentencia->execute ( array ($genero,$id_genero)); 
    }
    public function insertarGenero($titulo, $descripcion, $prioridad, $imagen = null) {
        $pathImg = null;
        if ($imagen)
            $pathImg = $this->uploadImage($imagen);

        $query = $this->db->prepare('INSERT INTO tareas(tipo, imagen) VALUES(?,?)');
        $query->execute([$tipo, $pathImg]);

        return $this->db->lastInsertId();
    }

        /**
    private function uploadImage($image){
        $target = 'img/task/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;**/
    }
}

