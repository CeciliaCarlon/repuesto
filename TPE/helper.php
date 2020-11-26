<?php

include_once 'Model/userModel.php';

class helper{

private $modelUser;

function __construct(){
    $this->modelUser= new userModel();
}

function checkLoggedInAndReturnUserInfo(){
    session_start();
    if(!isset($_SESSION['email'])){
        return null;
    }
    else{
        return $this->modelUser->getUsuario($_SESSION['email']);
    }
}

}