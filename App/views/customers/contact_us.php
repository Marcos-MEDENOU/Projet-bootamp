
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
    <section class="contact" id="contact">
        <div class="titre noir">
            <h2 class="titre-text" id="color"><span>C</span>ontact</h2>
        </div>
        <div class="contactform">
            <form action="">
            <h3>Envoyer un message</h3>
            <input type="text" placeholder="Nom" class="inputboite">
            <input type="text" placeholder="email" class="inputboite">
            <textarea placeholder="message" class="inputboite"></textarea>
            <input type="submit" value="envoyer" class="inputboite">
            </form>
        </div>
    </section>


    <?php
            require "../App/views/components/footer.php"
        ?>

</body>
</html>