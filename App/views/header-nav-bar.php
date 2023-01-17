<?php
 use  App\Controllers\ProductsControllers;
 
session_start();
if (isset($_SESSION["NavCustomerId"])) {
    $cid =  $_SESSION["NavCustomerId"];
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ressources/css/style.css">
    <link rel="stylesheet" href="../ressources/css/normalize.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header_container">
                     <!-- header-top-navigation -->
                <div class="header-top-navigation">
                <!-- shopname-zone -->
                    <div class="shopname_zone">
                        <div class="shopname">
                            <span class="shopname_block1">Electro</span ><span class="shopname_block2">Best</span>             
                        </div>
                        <div class="slog">
                            <span>MAGIC COMPONENTS</span>
                        </div>
                    </div>
                    <!-- end shopname zone -->

                    <!-- navigation -->
                    <div class="header-navigation">
                        <nav>
                            <ul>
                                <li><a href="/">Accueil</a> </li>
                                <li><a href="/Products">Produits</a></li>
                                <li><a href="">Services</a></li>
                                <li><a href="/contacts">Contact</a></li>
                                <?php
                                    if (!isset($_SESSION["NavCustomerId"])) {
                                        ?>
                                <li><a href="/Customers/login">Connexion</a></li>
                                <?php
                                    }else
                                    {
                                        ?>
                                <li><a href="/customerLogin/deconnect">Deconnexion</a></li>
                                        
                                        <?php
                                    }
                                    ?>
                                <!-- <li><a href="sellers/login">Vendre</a></li> --> 
                            </ul>
                        </nav>
                    </div>
                    
                    <div  class="panner_block_and_register">
                  
                            <div class="uer_icon_and_check_connexion">
                                <div class="user_icon">                              
                                    <?php

                                        if(isset($cid)){
                                            $products_selects=new ProductsControllers(); 
                                            $products=$products_selects->MatchUserNavBar($cid);
                                            if(count($products) > 0)
                                    ?>
                                        <div class="user_connect">
                                            <div class="user_connect_container">
                                                <div class="user_connect_image">
                                                <img width="40px" src="/media/uploads/<?= $products[0]["user_picture"]; ?>" alt="Photo de profil">
                                               
                                                </div>
                                                <div class="user_connect_name">
                                                    <span class="hi_user">hi, <span class="name_user"> <?= $products[0]["username"]?></span></span>
                                                </div>
                                            </div>                                 
                                        </div>
                                    <?php
                                        }else{
                                    ?>        
                                        <svg width="40px" opacity="0.7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                        <div class="connect_user_check">
                                        <img src="/ressources/svg/error.svg" width="26px" alt="">
                                        </div> 
                                        
                                    <?php
                                        }
                                    ?>
                                </div>

                                
                            </div>
                          
                        
                        
                      <?php  
                   $products_selects=new ProductsControllers(); 
                   $count=$products_selects->countUseerr();
                       ?> 
                        <div class="paner_icon">
                            <svg width="50px" opacity="0.7"xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                            <div class="panner_count">
                                <span class="panner_count_value">
                                    
                                
                               

                                <?php
                                    if (!isset($_SESSION["NavCustomerId"])) {
                                        ?>
                                0
                                <?php
                                    }else
                                    {
                                        ?>
                                        <?= count($count);?>                                        
                                        <?php
                                    }
                                    ?>
                            
                            </span>
                            </div>
                        </div>
                    
                    </div>
                <!-- end navigation -->
                </div>
                <!-- end header-top-navigation -->
        </div>
       
    </header>



</body>
</html>