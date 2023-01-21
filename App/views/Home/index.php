<?php
 use App\controllers\ProductsControllers;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ressources/css/style.css">
    <link rel="stylesheet" href="../ressources/css/normalize.css">
</head>
<body>

        <!-- header-top-navigation -->
            <?php
                require "../App/views/components/header-nav-bar.php";   
            ?>
        <!-- end header-top-navigation -->
        
        <!-- header-hero-zone -->
        <div class="hero-zone">
            <div class="hero-header-content">
                <h1><span class="hero-header-content-block1">Electronique 
            </span> <span class="hero-header-content-block2">sans secret</span></h1>
                <p class="para_hero">ElectroBest vous accompagne dans la conception et la réalisation de vos projets électronique</p>
                <div class="link_header_hero">
                 <a href="products">Visiter nos produits high-Tech</a>
                </div>
            </div>
            <div class="hero-header-picture">
                <!-- <img src="../media/images/arduino.jpg" alt=""> -->
               
            </div>
        </div>
        <!-- end header-hero-zone -->



        <main>
            <section class="Category-home-category">

                <h1 class="Category-title">Categorie de produits</h1>

                <div class="Category-box-container">

                    <div class="box">
                        <img src="/media/images/condo1.webp" alt="">
                        <h3>Pieces électronique</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
                        <!-- <a href="" class="btn">Boutique pieces électronque</a> -->
                    </div>

                    <div class="box">
                        <img src="/media/images/arduino.jpg" alt="">
                        <h3>Cartes électronique</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
                        <!-- <a href="" class="btn">Boutiques cartes électronique</a> -->
                    </div>

                    <div class="box">
                        <img src="/media/images/multimeter3.webp" alt="">
                        <h3>Appareils de mesure</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
                        <!-- <a href="" class="btn">Boutique appareils de mesure</a> -->
                    </div>

                    <div class="box">
                        <img src="/media/images/raspberry1.webp" alt="">
                        <h3>Pack electronique</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
                        <!-- <a href="" class="btn">Boutiques outils électroniciens</a> -->
                    </div>

            </section>

            <section class="products_home_block">
                <h1 class="shopp-title">Notre meilleures sélections pour vous</h1>
                <div class="products_home_views">
                    <?php
                   $products_selects=new ProductsControllers(); 
                   $products=$products_selects->homeProductsControllers();
                        if(count($products) > 0){
                            foreach ($products as $key => $value) {
                    ?>
                    <form action="" class="products_home_forms" method="POST" id="product_form">
                        <div class="prod_img">
                         <img src="/media/uploads/<?= $products[$key]["product_image"]; ?>" alt="" >
                            <div class="qty_price_home">
                            <div class="products_price">$<span><?= $products[$key]['product_price']; ?></span></div>
                            </div>
                        </div>
                        <div class="product_name"><?= $products[$key]['product_name']; ?></div>
                        <input type="hidden" name="pid" value="<?= $products[$key]['product_id']; ?>">
                        <input type="hidden" name="p_name" value="<?= $products[$key]['product_name']; ?>">
                        <input type="hidden" name="p_price" value="<?=$products[$key]['product_price']; ?>">
                        <input type="hidden" name="p_image" value="<?= $products[$key]['product_image']; ?>">
                        <label for="p_quantity">Quantité: </label>
                        <input type="number" name="p_quantity" class="p_quantity" value=1>
                        
                        <a href="view_page.php?pid=<?= $products[$key]['product_id']; ?>" class="view_more">Détails</a>
                        <input type="submit" value="Acheter" class="proceed-mney" name="add_to_cart">
                    </form>
                    <?php
                        }
                    }else{
                        echo '<p class="empty">no products added yet!</p>';
                    }
                    ?>
                </div>
            </section>

            <!---page temoignage-->
            <section class="temoignage" id="temoignage">
                <div class="titre blanc">
                    <h2 class="shopp-title">Que Disent Nos <span>C</span>lients</h2>
                </div>
                <div class="contenu">
                    <div class="box">
                        <div class="imbox">
                            <img src="/media/images/multimeter3.webp" alt="">
                        </div>
                        <div class="text">
                            <p>J'ai choisi Electrobest pour mon projet de soutenance de fin d'année. Les composants qui m'ont été vendus sont de tres bonne qualité.  Un personnel technique compétant et disponible. Rapport qualité prix excellent..</p>
                            <h3>Elon musk</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="imbox">
                            <img src="/media/images/kit1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Cliente depuis plus de 5 ans, j'ai été bien servis et j'ai recu également de nombreux conseils. Les prix mis sur les étiquettes des produits sont honnêtes et on peut profiter de remise en ouvrant un compte client. A recommander dans la région !
                            </p>
                            <h3>Merveille WINSAVI</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="imbox">
                            <img src="/media/images/faq.jpg" alt="">
                        </div>
                        <div class="text">
                            <p>Fournisseur en gros de composant électronique.
                                Personnel très sympa. Prix compétitif
                                Dommage qu'il n ouvre pas le dimanche.</p>
                            <h3>Yomi DENZEL</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="imbox">
                            <img src="/media/images/fer a souder.png" alt="">
                        </div>
                        <div class="text">
                            <p>J'ai trouvé ce dont j'ai besoin pour mon projet en électronique. Il s'agissait d'un systeme électronique 
                            qui facilte la surveillance des patients au sein d'un hopital.
                            </p>
                            <h3>MEDENOU Moise</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!---fin page de temoignage-->
            <!-- <section>
                <h2 class="title_performancy">Performances</h3>
                <article>
                    <div class="wrapper">
                        <div class="container_counter_up">
                        <i class="svg_counter_bloc">
                        <svg width="80"xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z" />
                            </svg>

                        </i>
                        <span class="num" data-val="350">000</span>
                        <span class="text">Projets réussis</span>
                        </div>
                        <div class="container_counter_up">
                        <i class="svg_counter_bloc">
                        <svg  width="80" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>

                        </i>
                        <span class="num" data-val="250">000</span>
                        <span class="text">clients satisfaits</span>
                        </div>
                        <div class="container_counter_up">
                        <i  class="svg_counter_bloc">
                        <svg width="80" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                            </svg>

                        </i>
                        <span class="num" data-val="325">000</span>
                        <span class="text">Followers</span>
                        </div>
                        <div class="container_counter_up">
                        <i class="svg_counter_bloc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        </i>
                        <span class="num" data-val="275">000</span>
                        <span class="text">produits</span>
                        </div>
                    </div>
                </article>
            </section> -->
            
        </main>


       

        <?php
            require "../App/views/components/footer.php"
        ?>

        <script src="../ressources/js/count_up_homepage.js"></script>
</body>
</html>