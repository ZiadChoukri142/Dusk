<?php require_once('../config.php') ?>

<?php

// ********** ADD NEW PRODUCT **********

  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload_product'])) {

    $name        = $_POST["name"];
    $price       = $_POST["price"];
    $description = $_POST["description"];
    $category_id = $_POST["category_id"];
    $filename    = $_FILES["image"]["name"];
    $tempname    = $_FILES["image"]["tmp_name"];    
    $folder      = "../static/images/".$filename;
          
    $conn = mysqli_connect("localhost", "root", "", "ecommerce_site");
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO products (name, price, picture, description, category_id) VALUES ('$name', '$price', '$filename', '$description', '$category_id')";
  
        // Execute query
        mysqli_query($conn, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($conn, "SELECT * FROM products");
?>

<?php

// ********** ADD NEW CATEGORY **********

  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload_category'])) {

    $name     = $_POST["category_name"];
    $filename = $_FILES["category_image"]["name"];
    $tempname = $_FILES["category_image"]["tmp_name"];    
    $folder   = "../static/images/".$filename;
          
    $conn = mysqli_connect("localhost", "root", "", "ecommerce_site");
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO categories (name, picture) VALUES ('$name', '$filename')";
  
        // Execute query
        mysqli_query($conn, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($conn, "SELECT * FROM categories");
?>