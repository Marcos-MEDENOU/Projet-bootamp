<?php

namespace App\Controllers;


use App\Models\ProductsModel;
use \Core\View;


/**
 * Home controller
 * 
 * PHP version 5.4
 */
class Products extends \Core\Controller {
  /**
   * Show the index page
   * 
   * @return void
   */
  public function SendAction() {
    // echo "Hello from the index action in the Home controller";
    
    $imgArr = array();


    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])){
     
      // Configure upload directory and allowed file types

      $upload_dir ='media\uploads'.DIRECTORY_SEPARATOR;
      $allowed_types = array('jpg', 'png', 'jpeg', 'gif' , 'webp');     

      // Define maxsize for files i.e 2MB

      $maxsize = 2 * 1024 * 1024;
       
      // Checks if user sent an empty form

      if(!empty($_FILES['product_file']['name'])) { 
      //  files uploading 	

        $file_tmpname = $_FILES['product_file']['tmp_name'];
        $file_name = $_FILES['product_file']['name'];
        $file_size = $_FILES['product_file']['size'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        // Set upload file path
        $filepath = $upload_dir.$file_name;

        
        // Check file type is allowed or not

        if(in_array(strtolower($file_ext), $allowed_types)) {
          // Verify file size - 2MB max

          if ($file_size > $maxsize){		
            echo "Error: File size is larger than the allowed limit 2MB.";           
            exit();}
          // If file with name already exist then append time in
          // front of name of the file to avoid overwriting of file

          if(file_exists($filepath)) {
            $name_used = time().$file_name;
            $filepath = $upload_dir.$name_used;
            if( move_uploaded_file($file_tmpname, $filepath)) {
              $file_name = $name_used;
              array_push($imgArr, $file_name);
              echo "products Successfully uploaded";       
            }else {
              echo "Error uploading products";
              exit();				
            }

          }else {
          
            if(move_uploaded_file($file_tmpname, $filepath)) {

              array_push($imgArr, $file_name);

            }
            else {					
              echo "Error uploading products";
              exit();				
            }
          }
        }
        else {
          echo "product file type is not allowed";
          exit();
        }
      
    }
    else {
      
      echo "No files selected";
      exit();
    }
    }
    $insertProductDb=new ProductsModel();
    $insertProductDb->insertProducts( $_FILES['product_file']['name']);
    // echo "images bien enrégistrées";
  }
  /********end method sendAction******/

  /**
   * Show the add new page
   * 
   * @return void
   */
  public function categoryAction() {
    View::render("customers/productsCategory.php");
    // echo "<p>Query string parameters: <pre>" . 
    // htmlspecialchars(print_r($_GET, true)) . "</pre></p>";
  }


  /**
   * Before filter
   * 
   * @return void
   */
  protected function before() {
    // echo "(before)";
  }

  /**
   * After filter
   * 
   * @return void
   */
  protected function after() {
    // echo "(after)";
  }
}
