<?php 

    namespace App\Models;

    use App\Models\Connexions;

    class CartModel extends Connexions{

        public function insertCarts() {
        
            $conn = $this->connect();
            /**
             * $sql
             */
            $sql = "INSERT INTO electrobest_project.cart(user_id,product_id, product_name, product_price, product_quantity , product_image) 
            
            VALUES(:s,:n,:c,:p,:qty,:images)";
            /**
             * $stmt
             */
            $stmt = $conn->prepare($sql);
                
            try {
                //code...
                $stmt->execute
                ([
                        ':s' =>$_SESSION["NavCustomerId"],
                        ':n' => $_POST['pid'],
                        ':c' => $_POST['p_name'],
                        ':p' => $_POST['p_price'],
                        ':qty' => $_POST['p_qty'],
                        ':images' =>$_POST['p_image']
                    ]);
                // echo "Cart Added Successfully";              
            } catch(PDOException $e){
                echo "Some Internal Error Occured";
            }     
        }

        public function countUserCart($cid){
            $this->cid=$cid;
            $conn=$this->connect();
            
            $select_products_count = $conn->prepare("SELECT * FROM electrobest_project. cart WHERE user_id=?;" );

            $select_products_count->execute([$this->cid]);

            $stmt=$select_products_count->fetchAll();
            
            return $stmt;
        }

        public function SearchIfUserAddCart(){
            // $this->cid=$cid;
            $conn=$this->connect();

            $select_products_count = $conn->prepare("SELECT * FROM electrobest_project. cart WHERE user_id=?;" );

            $select_products_count->execute([$_SESSION["NavCustomerId"]]);

            $stmt=$select_products_count->fetchAll();

            return $stmt;
        }

        //Avoir le nombre total d'ajout au panier déja éffectuer dans la base de donner
        public function pannerUserCartDB(){
            $conn=$this->connect();

            $select_products_count = $conn->prepare("SELECT product_quantity FROM electrobest_project. cart WHERE user_id=?;" );

            $select_products_count->execute([$_SESSION["NavCustomerId"]]);

            $stmt=$select_products_count->fetchAll();
            
            return $stmt;
        }

        public function pannerProductNameDB(){
            $conn=$this->connect();

            $select_products_count = $conn->prepare("SELECT product_name FROM electrobest_project. cart WHERE user_id=?;" );

            $select_products_count->execute([$_SESSION["NavCustomerId"]]);

            $stmt=$select_products_count->fetchAll();
            
            return $stmt;
        }

        // public function totalProductsUserAddDB(){

        //     $conn=$this->connect();

        //     $select_products_count = $conn->prepare("SELECT * FROM electrobest_project. cart WHERE user_id=?;" );

        //     $select_products_count->execute([$_SESSION["NavCustomerId"]]);

        //     $stmt=$select_products_count->fetchAll();
            
        //     return $stmt;
        // }

        //$newAdd est la valeur qui sera ajouter si un ajout était éffectuer
        public function updateUserCart($newAdd){
            $conn=$this->connect();
            $updateUserCart= $conn->prepare(" UPDATE table
            SET nom_colonne_1 = $newAdd
            WHERE condition");
        }


}
        
   