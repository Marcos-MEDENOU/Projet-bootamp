
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
    
<div class="container">

<div class="main">  	
        <form action="customerLogin.php" method="post" style="text-align: center;">
        <!-- <label for="chk" aria-hidden="true">Customer Login</label> -->
        <div class="shop-name-header-form">
                        <?php
                            require "../App/views/shop-name.php";
                        ?>
                        </div>
        <h1>Sellers Login</h1>
        <div class="rows">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="email@example.com" required="required">	
        </div>
        <div class="rows"> 	
        <label for="password">Password</label>		
        <input type="password" name="pass" placeholder="Password.." required="required">
        </div>
        <br>
        <input id="submit" type="submit" name="login" value ="Login" class="button">
        <br>
        <p style="color: black; margin-top: 6%;">New User?
        <a href="/sellers/register" class="sign">Sign Up Here</a>
        
        </p>
        </form>
        
</div>  <!-- main -->

</div>

</div> <!-- site content -->

</body>
</html>