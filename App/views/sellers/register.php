
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
<body class="register_form">     
<div class="site-content">
   			<div class="container">
				<div class="main_register_form"> 
                        
						<form  action="RegisterController/registercontroller" method="post" style="text-align: center;" enctype="multipart/form-data">
						 <!-- header-top-navigation -->
                         <div class="shop-name-header-form">
                        <?php
                            require "../App/views/shop-name.php";
							
						?>
                       
						</div>
						
                         <!-- end header-top-navigation -->
                        <!-- <label for="chk" aria-hidden="true">Customer Login</label> -->
						<h1>Sellers Inscription</h1>
                        
						<div class="rows Signup">

						<input type="text" name="username" placeholder="Name.." required="required">
						</div>
						<div class="rows Signup">
						<input type="email" name="email" placeholder="Email-id.." required="required">	
						</div>
						<div class="rows Signup"> 		
						<input type="Password" id="pass" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" title="must content atleast 1 upper & 1 lower character and 1 number & 1 special character, min length : 8" name="password" placeholder="Password.." required="required">
						</div>
						<div class="rows Signup">
						<input type='text' id="matchText" name="confirm" placeholder="Confirm Password.." required="required" >	
						</div>
						<div class="rows Signup">
						<input type="number" name="contactNo" placeholder="Contact No.." required="required" minlength="10" maxlength="10" title="Contact number is not right" >
						</div>
						<br>
						<input id="submit" type="submit" name="submit" value="Register"  class="button">
						<br>
						<p style="color: black; margin-top: 6%;">Already Registered?
						<a href="/sellers/login" class="sign">Login Here</a>
						
						</p>
						</form>
						
				</div>  <!-- main -->

			</div>
			
		</div> <!-- site content -->

        <script>
	var password = document.getElementById("pass"), confirm_password = document.getElementById("matchText");

    function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    </script>
    
</body>
</html>