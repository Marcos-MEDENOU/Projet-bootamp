<?php

namespace App\Controllers;


use \Core\View;
/**
 * Session controller
 * 
 * PHP version 5.4
 */

 /*************************************/
    /*WEB SITE SESSION CONTROLLER*/
 //***********************************//

class SessionControllers{
  /***
   * Change the session user/Admin
   *
   * @return void
   *
   */
  public function startSession() {

 /*************************************/
    /*START SESSION*/
 //***********************************//
    session_start();
  }

  public function closeSession(){

/*************************************/
    /*CLOSE SESSION*/
 //***********************************//
    session_start();
    session_unset();
    session_destroy();
    session_abort();  
    header("Location:/");
  }
}
