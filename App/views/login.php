
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
</head>
<body>     
    <div class="form-register-container">
    <?php
        require "shop-name.php";
        ?>
        <form action="" class="form-login">

            <label for="useremail" name="useremail">email</label><br>
            <input type="text"> <br>

            <label for="usermdp" name="usermdp">Mot de passe</label><br>
            <input type="text"> <br>

            <button type="submit">Soumettre</button>
        </form>
    </div>
    
</body>
</html>