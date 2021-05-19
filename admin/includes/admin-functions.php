<?php
  // *** INSERT DATA ***
    // ** PRODUCT **

  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "ecommerce_site");

  // Initialize message variable
  $msg = "";

    // submit button clicked
    if (isset($_POST['upload_product'])) {
  	// get data names
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
  		$msg = "Product uploaded successfully";
  	}else{
  		$msg = "Failed to upload Product";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM products");

?>

<?php
  // *** INSERT DATA ***
    // ** CATEGORY **
    
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "ecommerce_site");

  // Initialize message variable
  $msg = "";

    // submit button clicked
    if (isset($_POST['upload_category'])) {
  	// get data names
    $category_name = $_POST['category_name'];

  	$sql = "INSERT INTO categories (name) VALUES ('$category_name')";
  	// execute query
  	mysqli_query($db, $sql);

    if(mysqli_query($db,$sql)) {
  		$msg = "Product uploaded successfully";
  	}else{
  		$msg = "Failed to upload Product";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM categories");

?>