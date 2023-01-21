<?php 

    namespace App\Models;

    use App\Models\Connexions;

    class UserModel extends Connexions{ 
    /**
    * $conn
    */
    public $conn;
    public $username;
    public $email;
    public $password;
    public $phoneNumber;
    public $emailConnexion;
    public $emailConnect;


    /**
     * verify()
     */
    public function verifyEmail($email) {
      /**
     * verify()
     */
   
        $this->email = $email;

        /**
         * 
         */
        $conn = $this->connect();
        /**
         * $sql
         */
        $sql = "SELECT * FROM `electrobest_project`.customer WHERE useremail = ?;";
        /**
         * $stmt
         */
        $stmt = $conn->prepare($sql);
        $stmt->execute([$this->email]);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function verifyUsername($username) {
        /**
       * verify()
       */
     
          $this->username = $username;
  
          /**
           * 
           */
          $conn = $this->connect();
          /**
           * $sql
           */
          $sql = "SELECT * FROM `electrobest_project`.customer WHERE username = ?;";
          /**
           * $stmt
           */
          $stmt = $conn->prepare($sql);
          $stmt->execute([$this->username]);
          $result = $stmt->fetchAll();
          return $result;
      }


      public function verifyPhoneNumber($phoneNumber) {
        /**
       * verify()
       */
     
          $this->phoneNumber = $phoneNumber;
  
          /**
           * 
           * 
           */
          $conn = $this->connect();
          /**
           * $sql
           */
          $sql = "SELECT * FROM `electrobest_project`.customer WHERE contactNumber = ?;";
          /**
           * $stmt
           */
          $stmt = $conn->prepare($sql);
          $stmt->execute([$this->phoneNumber]);
          $result = $stmt->fetchAll();
          return $result;
      }

    //   public function verifyEmailConnexion($emailConnexion){
    //     $this->emailConnexion=$emailConnexion;
    //     $conn = $this->connect();
    //     $sql = "SELECT * FROM `electrobest`.customer WHERE useremail = ?;";
    //     /**
    //      * $stmt
    //      */
    //     $stmt = $conn->prepare($sql);
    //     $stmt->execute([$this->emailConnexion]);
    //     $result = $stmt->fetchAll();
    //     return $result;
    // }

    public function verifyEmailConn($emailConnexion){

        $this->emailConnect=$emailConnexion;

        $conn = $this->connect();
        /**
         * $stmt
         */
        try {
          //code...
           $sql="SELECT cid FROM  electrobest_project.customer where useremail=?;";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$this->emailConnect]);
        $row=$stmt->fetch();
        return $row;
        } catch (\PDOException $e) {
          //throw $th;
          echo $e->getMessage();
        }
               
    }

    public function verifyEmailConnexion($emailConnexion){

        $this->emailConnexion=$emailConnexion;

        $conn = $this->connect();

        $sql = "SELECT * FROM `electrobest_project`.customer WHERE useremail = ?;";
        /**
         * $stmt
         */
        try {
          //code...
          $stmt = $conn->prepare($sql);
          $stmt->execute([$this->emailConnexion]);
          $result = $stmt->fetchAll(); 
          return $result;
        } catch (\PDOException $e) {
          //throw $th;
          echo $e->getMessage();
        }
       
    }

    public function searchUserConnect(){
      
      
      $conn = $this->connect();

      $sql = "SELECT * FROM `electrobest_project`.customer WHERE cid = ?;";

      try {
        //code...
        $stmt = $conn->prepare($sql);
        $stmt->execute([$_SESSION["NavCustomerId"]]);
        $result = $stmt->fetchAll();
        return $result;
      } catch (\PDOException $e) {
        echo $e->getMessage();
      }

    }

    /**
     * insertUser()
     */
    public function insertUser( $username, $email, $password, $phoneNumber) {

        $conn = $this->connect();

        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->phoneNumber=$phoneNumber;

        /**
         * $sql
         */
        try {
            //code...
            $sql = "INSERT INTO `electrobest_project`.customer(username,useremail,contactNumber,password, user_picture) VALUES(:username, :useremail, :contactNumber, :password, :user_picture)";
        
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ":username" => $this->username,
                ":useremail" => $this->email,    
                ":contactNumber" => $this->phoneNumber,
                ":password" => password_hash($this->password,PASSWORD_DEFAULT),
                ":user_picture"=>'avatar.jpg'
            ]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            //throw $th;
        }
       

    }
}
        
    
// namespace App\Models;

// use PDO;
// use PDOException;
//  require "Connexion.php";
// if(isset($_POST['submit']) ){
// 	$conn = new Connexion();
// 	$sql = "INSERT INTO oneshopy_project.customer(name,email,contactNo,pass) VALUES(:n,:e,:c,:p)";
// 	$pass = md5($_POST['password']);
// 	$stmt = $conn->prepare($sql);
// 	try{
		
// 	$stmt->execute(
// 		array(
// 			':n' => $_POST['name'], 
// 			':e' => $_POST['email'],
// 			':c' => $_POST['contactNo'],
// 			':p' => $pass,
// 		)
// 	);
// 	myAlert("Customer Successfully Registered");
// 	$email = $_POST['email'];
// 	$stmt = $conn->query("SELECT cid FROM oneshopy_project.customer where email='$email';");
// 	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	
// 	session_start();

// 	$_SESSION['NavCusCid'] = $row['cid'];

// 	header("refresh:1; url= customeraddress.html");
	
//     exit();
// }catch(PDOException $e){
// 	myAlert("duplicate entry");
// 	header("refresh:1; url= customerreg.html");
// }
	
// }
// 
// <?php
// function myAlert($msg){
// 	echo "<script>alert('$msg');</script>";
// }


//   class RegisterModels{
//   }
//     /**
//      * $conn
//      */
//     public $conn;

//     public $firstname;
//     public $lastname;
//     public $email;
//     public $password;

//     /**
//      * verify()
//      */
//     public function verify($email) {
      
//     }

//     /**
//      * insertUser()
//      */
//     public function insertUser($lastname, $firstname, $email, $password) {

//         $conn = $this->connect();

//         $this->lastname = $lastname;
//         $this->firstname = $firstname;
//         $this->email = $email;
//         $this->password = $password;

//         /**
//          * $sql
//          */
//         $sql = "INSERT INTO `hitec`.users VALUES(NULL, :lastname, :firstname, :email, :password, 'customer')";
        
//         $stmt = $conn->prepare($sql);
//         $stmt->execute([
//             ":lastname" => $this->lastname,
//             ":firstname" => $this->firstname,
//             ":email" => $this->email,
//             ":password" => password_hash($this->password, PASSWORD_DEFAULT) 
//         ]);

//     }
// }

