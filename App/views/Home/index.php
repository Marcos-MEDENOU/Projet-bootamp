<?php


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
                        if(count($products_home) > 0){
                            foreach ($products_home as $key => $value) {
                    ?>
                    <form action="" class="products_home_forms" method="POST" id="product_form">
                        <div class="prod_img">
                         <img src="/media/uploads/<?= $products_home[$key]["product_image"]; ?>" alt="" >
                            <div class="qty_price_home">
                            <div class="products_price">$<span><?= $products_home[$key]['product_price']; ?></span></div>
                            </div>
                        </div>
                        <div class="product_name"><?= $products_home[$key]['product_name']; ?></div>
                        <input type="hidden" name="pid" value="<?= $products_home[$key]['product_id']; ?>">
                        <input type="hidden" name="p_name" value="<?= $products_home[$key]['product_name']; ?>">
                        <input type="hidden" name="p_price" value="<?=$products_home[$key]['product_price']; ?>">
                        <input type="hidden" name="p_image" value="<?= $products_home[$key]['product_image']; ?>">
                        <label for="p_quantity">Quantité: </label>
                        <input type="number" name="p_quantity" class="p_quantity" value=1>
                        
                        <a href="view_page.php?pid=<?= $products_home[$key]['product_id']; ?>" class="view_more">Détails</a>
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
   
        </main>

        <?php
            require "../App/views/components/footer.php"
        ?>

        <script src="../ressources/js/count_up_homepage.js"></script>
</body>
</html>