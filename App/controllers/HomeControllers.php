<?php

namespace App\Controllers;

use App\Controllers\ProductsControllers;

use App\Controllers\ComponentsControllers;

use \Core\View;
/*
 * Home controller
 * 
 * PHP version 5.4
 */
class HomeControllers extends \Core\Controller {
  /***
   * 
   * Show the index page
   * 
   * @return void
   *
   */

   public function __construct(){

     $this->products_selects=new ProductsControllers();

     $this->header_components= new ComponentsControllers();

     $this->comp_control=new SessionControllers();
   }
   
  public function indexAction() {


    $products=$this->products_selects->homeProductsControllers();
    
    $header=$this->header_components->header_nav_bar_session();
    
    $searchUser=$this->header_components-> headerCollectUserInfos();

    $products_home=$products;

    $cid=$header;

    $userConnect= $searchUser;

    require_once("../App/views/components/header-nav-bar.php");

    require_once("../App/views/Home/index.php");
  }

  public function ContactsAction() {

    $header=$this->header_components-> header_nav_bar_session();

    $cid= $header;

    $searchUser=$this->header_components-> headerCollectUserInfos();

    $userConnect= $searchUser;

    require_once("../App/views/components/header-nav-bar.php");

    require_once("../App/views/customers/contact_us.php");
  }

  public function disconnect(){

    $this->comp_control->closeSessionAction();
  }
  

  public function loginAction() {
    // echo "Hello from the index action in the Home controller";
    $header=$this->header_components-> header_nav_bar_session();

    $cid= $header;

    $searchUser=$this->header_components-> headerCollectUserInfos();

    $userConnect= $searchUser;

    require_once("../App/views/components/header-nav-bar.php");

    View::render("customers/login.php");
  }

  /**
   * Show the add new page
   * 
   * @return void
   */
  public function registerAction() {
    $header=$this->header_components-> header_nav_bar_session();

    $cid= $header;

    $searchUser=$this->header_components-> headerCollectUserInfos();

    $userConnect= $searchUser;

    require_once("../App/views/components/header-nav-bar.php");
    
    View::render("customers/register.php");
    // echo "<p>Query string parameters: <pre>" . 
    // htmlspecialchars(print_r($_GET, true)) . "</pre></p>";
  }

}
