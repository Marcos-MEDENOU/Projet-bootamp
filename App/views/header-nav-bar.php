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
                            </ul>
                        </nav>
                    </div>

                    <div class="header_nav_right0">
                            <div class="header-navigation">
                                <nav>
                                    <ul>
                                   
                                         <?php
                                            if (!isset($_SESSION["NavCustomerId"])) {
                                                ?>
                                                 <li><a href="/customerRegistration/register">Inscription</a></li>
                                    <li><a href="/Customers/login">Connexion</a></li>
                                      
                                        <?php
                                             }else if(isset($cid)){
                                                    $products_selects=new ProductsControllers(); 
                                                    $products=$products_selects->MatchUserNavBar($cid);
                                                    if(count($products) > 0)
                                            ?>
                                                <div id="user_connect">
                                                    <div class="user_connect_container">
                                                        <div class="user_connect_image">
                                                             <img width="40px" src="/media/uploads/<?= $products[0]["user_picture"]; ?>" alt="Photo de profil">                                                      
                                                        </div>
                                                        <div class="user_connect_name">
                                                            <span class="hi_user"><span class="name_user"> <?= $products[0]["username"]?></span></span>
                                                        </div>  
                                                    </div>    
                                                    <div>
                                                            
                                                               
                                             </div>
                                                            
                                                        </div>
                                                    
                                                
                                          
                                                <!-- <li><a href="/customerRegistration/register">Inscription</a></li>
                                    <li><a href="/Customers/login">Connexion</a></li> -->
                                                
                                              <?php
                                            }
                                            ?>
                                    </ul>
                                </nav>

                                <div class="show" id="user_connect_navbar">
                                    <!-- <nav class="user_connect_navbar"> -->
                                        <ul class="header__profile__name--nav--list">
                                            <li class="header__profile__name--nav--item">
                                                <a class="header__profile__name--nav--link" href="#">Profile</a>
                                            </li>
                                            <li class="header__profile__name--nav--item">
                                                <a class="header__profile__name--nav--link" href="#">Message</a>
                                            </li>
                                            <li class="header__profile__name--nav--item">
                                                <a class="header__profile__name--nav--link" href="/customerLogin/deconnect">Logout</a>
                                            </li>
                                        </ul>
                                    <!-- </nav> -->
                                    
                                          
                                </div>
                        </div>
                        

                            <div class="paner_icon">
                                    
                                    <svg width="50px" opacity="0.7"xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                   </svg> 

                                   <!-- <div class="panner_count">
                                       <span class="panner_count_value">0</span>-->
                               </div>
                            <div>
                           
            </div>
        </div>
                
    </header>
   
</body>
</html>