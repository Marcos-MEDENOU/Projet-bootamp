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

   * Show the add new page
   * 
   * @return void
   */
 

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
  
}
