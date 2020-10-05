<?php

class taskModelGenero{

private $db;

    function __construct(){
$this ->db = $db = new PDO('mysql:host=localhost;'.'dbname=cinema;charset=utf8', 'root', '');

    }

function GetTasks() {
    $sentencia =$this->db->prepare('SELECT * FROM genero');
    $sentencia->execute();

}
function GetTask($id_generos){
    $sentencia = $this->db->prepare("SELECT * FROM task WHERE id=?");
    $sentencia->execute(array($id_generos));
}
function insertTask($tipo,$completed) {
    $sentencia = $this->db->prepare('INSERT INTO genero(tipo, completed) VALUES (?,?)');
    $sentencia->execute(array($tipo,$completed));


}

function  DeleteTask($generos_id) {
$sentencia  = $this->db -> prepare ("DELETE FROM genero WHERE id=?");
$sentencia -> ejecutar (array($generos_id));


}


function  UpdateTask ($generos_id) {
   
$sentencia  = $this->db -> prepare ( "UPDATE genero SET completed= 1 WHERE id =?" );
$sentencia->ejecutar ( array ($generos_id ));


}

}
?>
