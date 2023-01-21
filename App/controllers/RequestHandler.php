<?php

namespace App\Controllers;
use App\Controllers\RegisterControllers;
use \Core\View;

session_start();

// class RequestHandler { }
class RequestHandler extends \Core\Controller{ 

//register

public function validationRegisterAction(){
    if( isset($_POST["email"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm = $_POST["confirm"];
        $contactNo = $_POST["contactNo"];
    }
    $controller = new RegisterControllers ($username, $email, $password, $confirm, $contactNo);
    $controller->verifyControl();
    echo "Inscription réussi";
}

public function validationLoginAction() {
      if( $_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["pass"];
        $controller = new LoginControllers ( $email, $password);
        $controller->verifyControl();

        echo "Connexion réussi";
    }
  }
}