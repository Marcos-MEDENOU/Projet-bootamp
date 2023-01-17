<?php

namespace App\Controllers;

require "../App/Controllers/LoginControllers.php";

use \Core\View;

/**
 * Home controller
 * 
 * PHP version 5.4
 */

class customerLogin extends \Core\Controller {
  /**
   * Show the index page
   * 
   * @return void
   * 
   */
  public function validationAction() {
    // echo "Hello from the index action in the Home controller";
    // if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
      if( $_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["pass"];
        $controller = new LoginControllers ( $email, $password);
        $controller->verifyControl();

        echo "Connexion réussi";
    }
  }

  
  /**
   * Show the add new page
   * 
   * @return void
   */
  public function registerAction() {
    View::render("customers/register.php");
    // echo "<p>Query string parameters: <pre>" . 
    // htmlspecialchars(print_r($_GET, true)) . "</pre></p>";
  }

  
  /**
   * Before filter
   * 
   * @return void
   */
  protected function before() {
    // echo "(before)";
  }

  /**
   * After filter
   * 
   * @return void
   */
  protected function after() {
    // echo "(after)";
  }

  public function deconnect() {
    session_start();
    session_unset();
    session_destroy();
    session_abort();  
    
    header("Location:/");
 }
}
