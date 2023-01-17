
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
    <header>
        <!-- header-top-navigation -->
       
            <?php
                require "header-nav-bar.php"
            ?>
        
        <!-- end header-top-navigation -->


        <!-- header-hero-zone -->
        <div class="hero-zone">
            <div class="hero-header-content">
                <h1><span class="hero-header-content-block1">Electronique</span> <span class="hero-header-content-block2">sans secret</span></h1>
                <p>ElectroBest vous accompagne dans la conception et la réalisation de vos projets électronique</p>
                <div class="link_header_hero">
                 <a href="./products.php">Boutique des composants</a>
                </div>
            </div>
            <div class="hero-header-picture">
                <img src="../media/images/arduino.jpg" alt="">
            </div>
        </div>
        <!-- end header-hero-zone -->
        </header>


        <main>
            <section class="website-speciality">
                <div class="content_before_specification_redirect">
                    <h2>Nos services</h2>
                    <p>Nous avons pour objectif de mettre a votre disposition, tous les 
                        composants dont vous pouvez avoir besoins pour vos projets. Bonne nouvelle, 
                        une équipe composé d'électroniciens et de programmeurs sont disponibles
                        pour toutes vos préoccupation. Pour les réponses rapide, consultez notre page FAQ. 
                    </p>
                </div>
                
                <div class="speciality-card">
                    <div class="components-access">
                        <img src="../media/images/composants.jpg" alt="">
                        <h3>Pieces électronique</h3>
                        <p>L'éssentiel de vos besoins en matiere de pieces électronique</p>
                    </div>

                    <div class="equipe-access">
                        <img src="../media/images/membership.jpg" alt="">
                        <h3>Membre ElectroBest</h3>
                        <p>Une équipe dynamique et attentive a l'écoute des clients</p>
                    </div>

                    <div class="faq-access">
                        <img src="../media/images/faq.jpg" alt="">
                        <h3>FAQ</h3>
                        <p>Réponse rapide aux questions frequemment posées</p>
                    </div>
                </div>
            </section>      
        </main>

        <?php
            require "footer.php"
        ?>
</body>
</html>