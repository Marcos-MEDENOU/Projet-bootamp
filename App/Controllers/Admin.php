<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 * 
 * PHP version 5.4
 */
class Admin extends \Core\Controller {
  /**
   * Show the index page
   * 
   * @return void
   */
  // public function loginAction() {
  //   // echo "Hello from the index action in the Home controller";
  //   View::render("customers/login.php");
  // }

  /**
   * Show the add new page
   * 
   * @return void
   */
  // public function registerAction() {
  //   View::render("customers/register.php");
  //   // echo "<p>Query string parameters: <pre>" . 
  //   // htmlspecialchars(print_r($_GET, true)) . "</pre></p>";
  // }

  public function dashboardAction() {
    View::render("admin/dashboardAdmin.php");
    // echo "<p>Query string parameters: <pre>" . 
  }
  /**
   * Before filter
   * 
   * @return void
   */
  protected function before() {
    // echo "(before)";
  }

  public function addProductAction(){
    View::render("admin/AdminAddProduct.php");
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
