<?php

namespace App\Controllers;

require "../App/Controllers/RegisterControllers.php";


use \Core\View;

/**
 * Home controller
 * 
 * PHP version 5.4
 */
class customerRegistration extends \Core\Controller {
  /**
   * Show the index page
   * 
   * @return void
   */
  public function validationAction() {
      if( isset($_POST["email"])) {
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $confirm = $_POST["confirm"];
      $contactNo = $_POST["contactNo"];

  $controller = new RegisterControllers ($username, $email, $password, $confirm, $contactNo);
  $controller->verifyControl();
  echo "Inscription réussi";
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
}
