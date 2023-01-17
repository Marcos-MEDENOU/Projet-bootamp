
<?php
session_start();
	$cid =  $_SESSION["NavCustomerId"];
	echo $cid;
	// session_start();
	// try {
	// 	//code...
	// 	$cid = $_SESSION['NavCustomerId'];
	// 	$connn=new Connexions();
	// 	$conn=$connn->connect();
	// 	$stmt0 = $conn->query("SELECT username FROM electrobest_project.customer where cid = $cid;");
	// 	$row0=$stmt0->fetch(PDO::FETCH_ASSOC);
	// 	echo $row0["name"];
	//   } catch (\PDOException $e) {
	// 	//throw $th;
	// 	echo "errorrrrrrrrrrrr";
	// 	echo $e->getMessage();
	//   }
?>

<?php
  use App\Models\Connexions;
//   require "../App/views/header-nav-bar.php";
  require "../App/views/customers/productsPage.php"
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

<?php
            require "../App/views/footer.php"
        ?>
<body>

</body>
</html>

