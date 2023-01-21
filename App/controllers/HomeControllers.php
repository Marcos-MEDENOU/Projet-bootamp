<?php

namespace App\Controllers;

use App\Controllers\ProductsControllers;
use \Core\View;
/**
 * Home controller
 * 
 * PHP version 5.4
 */
class HomeControllers extends \Core\Controller {
  /***
   * Show the index page
   * 
   * @return void
   */
  public $productsFunction;

  public function indexAction() {
    // echo "Hello from the index action in the Home controller";
    $this->productsFunction= new ProductsControllers();
    View::render("Home/index.php");
  }
}
