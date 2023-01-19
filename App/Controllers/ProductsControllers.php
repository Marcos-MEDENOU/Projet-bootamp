<?php
 
namespace App\Controllers;

use App\Models\ProductsModel;

use App\Models\UserModel;

use App\Models\CartModel;


class ProductsControllers  {
/**
 * $usermodel
 */
    public $productsmodel;
    public $category;
    public $cid;

    public function homeProductsControllers(){
        $this->productsmodel=new ProductsModel();
        $result= $this->productsmodel->insertProductsHomePage();
        return $result;
    }

    public function ProductsPageControllers(){
        $this->productsmodel=new ProductsModel();
        $result= $this->productsmodel->insertProductsPage();
        return $result;
    }

    public function ProductsPageCategory(){
        $this->productsmodel=new ProductsModel();
        $result= $this->productsmodel->ProductsCategory();
        return $result;
    }

    public function MatchUserNavBar(){
        $this->productsmodel=new UserModel();
        $result= $this->productsmodel->searchUserConnect();
        return $result;
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
                $pannerProductNameDB= $this->productsmodel->pannerProductNameDB();
                $productsUserAddCart=$pannerProductNameDB[0]["product_name"];
                $array=[];
                foreach ($pannerProductNameDB as $key => $value) {
                    # code...
                    array_push($array, $value['product_name'] );
                }
                print_r($array);
           
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
                    exit();
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

