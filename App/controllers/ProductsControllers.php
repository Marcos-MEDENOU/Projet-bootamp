<?php

namespace App\Controllers;

use App\Models\ProductsModel;

use App\Models\UserModel;

use App\Models\CartModel;

use App\Controllers\ComponentsControllers;

class ProductsControllers extends \Core\Controller {
/**
 * PRODUCTS_CONTROLLERS class
 */
    public $productsmodel;
    public $category;
    public $cid;

    public function __construct(){
        $this->productsmodel=new ProductsModel();
        $this->usersmodel=new UserModel();
        $this->header_components= new ComponentsControllers();
    }

    public function homeProductsControllers(){
        $result= $this->productsmodel->insertProductsHomePage();
        return $result;
    }

    public function ProductsPageControllersAction(){

        $all_products= $this->productsmodel->insertProductsPage(); 

        $header=$this->header_components->header_nav_bar_session();

        $searchUser=$this->header_components-> headerCollectUserInfos();

        $cid= $header;

        $products=$all_products;


        $userConnect= $searchUser;

        require_once("../App/views/components/header-nav-bar.php");

        require_once("../App/views/customers/productsPage.php");
    }

    public function ProductsPageCategoryAction(){
        
        $productByCategory= $this->productsmodel->ProductsCategory();

        $products=$productByCategory;

        $header=$this->header_components->header_nav_bar_session();

        $cid= $header;

        $searchUser=$this->header_components-> headerCollectUserInfos();

        $userConnect= $searchUser;

        require_once("../App/views/components/header-nav-bar.php");

        require_once("../App/views/customers/productsCategory.php");
    }

    

    public function detectIfUserConnect(){

        session_start();
        //if user have session start
        if(isset($_SESSION["NavCustomerId"])){    
            //if user add one or multiple product to cart
            $this->productsmodel=new CartModel();
            $SearchIfUserAddCart=  $this->productsmodel->SearchIfUserAddCart();
            if(count($SearchIfUserAddCart)>0){
                $this->productsmodel= new CartModel(); 
                $pannerUserCartDB=   $this->productsmodel->pannerUserCartDB();
                $resultCartUser=$pannerUserCartDB[0]["product_quantity"];
                
                $this->productsmodell= new CartModel(); 
                $pannerProductNameDB= $this->productsmodell->pannerProductNameDB();
                    $array=[];

                    foreach ($pannerProductNameDB as $key => $value) {
                        # code...
                        array_push($array, $value[0]);
                    }
                        print_r($array);

                    if(in_array($_POST['p_name'] , $array))
                    {
                        echo "produit déja ajouter";
                        $this->cartsmodel=new CartModel();
                        $this->cartsmodell=new CartModel();
                        $pannerUserCartDB= $this->productsmodel->pannerUserCartDB();
                        $resultCartUser=$pannerUserCartDB[0]["product_quantity"];
                        $result= $this->cartsmodel->updateUserCart($_POST['p_qty'], $resultCartUser);
                        echo "quantité: ".$_POST['p_qty'];
                        
                    }else{

                        // $this->cartsmodell=new CartModel();
                        // $result= $this->cartsmodell->insertCarts();

                        // $this->productsmodell=new ProductsModel();

                        // $pannerUserCartDB= $this->productsmodell->pannerUserCartDB();
                        // $resultCartUser=$pannerUserCartDB[0]["product_quantity"];

                        // echo $resultCartUser;
                        // echo "quantité: ".$_POST['p_qty'];
                    }

                    // print_r($productsUserAddCart);
                    // echo $_POST['p_name'];
                    // echo $resultCartUser;
                    // echo $productsUserAddCart;
                    // print_r($pannerProductNameDB);
                    // echo "ADD";
                    
                    //else=> if user have not add a products to cart
            }else{         
                    $this->cartsmodel=new CartModel();
                    $result= $this->cartsmodel->insertCarts();
                    $pannerUserCartDB=   $this->productsmodel->pannerUserCartDB();
                    $resultCartUser=$pannerUserCartDB[0]["product_quantity"];
                    echo $resultCartUser;
                    echo "quantité: ".$_POST['p_qty'];
                }
        }else{
            echo "Session absente"; 
        }
    }
    

    public function countUseerr(){

        if(isset($_SESSION["NavCustomerId"])){   
            $this->cartsmodels=new CartModel();
            $results= $this->cartsmodels->countUserCart($_SESSION["NavCustomerId"]);
            return $results;
        }
    }

}

