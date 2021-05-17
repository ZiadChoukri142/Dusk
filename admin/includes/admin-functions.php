<?php
  // *** INSERT DATA ***

  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "ecommerce_site");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];

  	// image file directory
  	$target = "./static/images/".basename($image);

  	$sql = "INSERT INTO products (name,price,picture,description,category_id) VALUES ('$name','$price','$image','$description','$category_id')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM products");

?>