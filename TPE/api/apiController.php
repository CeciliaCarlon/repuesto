<?php
include_once 'apiView.php';

abstract class apiController{

    //ATRIBUTOS
    protected $model;
    protected $view;
    private $data;

    //CONSTRUCTOR
    public function __construct() {
        $this->view = new apiView();
        $this->data = file_get_contents("php://input"); 
    }

    //DECODIFICAR UN STRING A JSON
    function getData(){ 
        return json_decode($this->data); 
    }  


}