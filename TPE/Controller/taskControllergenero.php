<?php

require_once "./View/taskViewGenero.php";
require_once "./Model/taskModelGenero.php";

class tasksControllergenero{

private $view;
private $model;
function __construct(){

$this->view = new tasksViewGenero();
$this->model= new tasksModelGenero();

}

function Home (){
$tipo=$this->model->getTasks();
$this->view-> showGenero( $tipo);
}


}
function InsertTask(){
    
        $tipo=$this->model->insertTask();
        $this->model->insertTask($_POST['input_tipo']);
        $tipo->view-> showGeneroInsertada();

        $this->Home();
    }

/**function  DeleteTask($params=null) {
    $generos_id= $params[`:ID`];
    $this->model ->DeleteTask($genero_id);
    $this->view->ShowHomeLocation(); 
}

function  UpdateTask ($params=null) ){
    $generos_id= $params[`:ID`];
    $this->model ->UpdateTask($generos_id);
    $this->view->ShowHomeLocation();
}
function EditTask($params = null){
    $task_id = $params[':ID'];
    $task = $this->model->GetTask($generos_id);

     $this->view->ShowEditTask($generos);
}
}**/
?>