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
        if(isset($_SESSION["NavCustomerId"])){       
        $this->cartsmodel=new CartModel();
        $result= $this->cartsmodel->insertCarts();
        return $result;
        }else{
            echo "Déconnecté";
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

