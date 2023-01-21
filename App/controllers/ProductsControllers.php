<?php

namespace App\Controllers;

use App\Models\ProductsModel;

use App\Models\UserModel;

use App\Models\CartModel;

class ProductsControllers {
/**
 * $usermodel
 */
    public $productsmodel;
    public $category;
    public $cid;

    public function __construct(){
        $this->productsmodel=new ProductsModel();
        $this->usersmodel=new UserModel();

    }

    public function homeProductsControllers(){
        $result= $this->productsmodel->insertProductsHomePage();
        return $result;
    }

    public function ProductsPageControllers(){
        $result= $this->productsmodel->insertProductsPage();
        return $result;
    }

    public function ProductsPageCategory(){
        $result= $this->productsmodel->ProductsCategory();
        return $result;
    }

    public function MatchUserNavBar(){
        $result= $this->usersmodel->searchUserConnect();
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

