<?php require_once('../config.php') ?>
<?php  

// ********** ADD NEW PRODUCT **********

if (isset($_POST['upload_product'])) {

    $name        = $_POST['name'];
    $price       = $_POST['price'];
    $description = $_POST['description'];
    $category    = $_POST['category'];
    $filename    = $_FILES["image"]["name"];
    $tempname    = $_FILES["image"]["tmp_name"];
    $folder      = "../static/images/".$filename;

    $conn = mysqli_connect("localhost", "root", "", "ecommerce_site");

        $sql = "INSERT INTO products (name,price,picture,description,category) VALUES ('$name', '$price','$filename', '$description', '$category')";

        mysqli_query($conn, $sql);

  }
  $result = mysqli_query($conn, "SELECT * FROM products");
?>

<?php

// ********** ADD NEW CATEGORY **********

  if (isset($_POST['upload_category'])) {

    $name        = $_POST['category_name'];
    $filename    = $_FILES["category_image"]["name"];
    $tempname    = $_FILES["category_image"]["tmp_name"];    
    $folder      = "../static/images/".$filename;

        $conn = mysqli_connect("localhost", "root", "", "ecommerce_site");

        $sql = "INSERT INTO categories (name,picture) VALUES ('$name','$filename')";

        mysqli_query($conn, $sql);

  }
  $result = mysqli_query($conn, "SELECT * FROM categories");
?> 