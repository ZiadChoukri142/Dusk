<?php require_once('config.php') ?>
<?php include_once ('./includes/header.php');?>
<?php

// ********** REGISTER **********

  $msg = "";
  
  if (isset($_POST['register'])) {

    $name        = $_POST["username"];
    $password    = $_POST["password"];
    $email       = $_POST["email"];
          
    $conn = mysqli_connect("localhost", "root", "", "ecommerce_site");
  
        $sql = "INSERT INTO customers (name, password, email) VALUES ('$name', '$password', '$email')";
  
        mysqli_query($conn, $sql);

        mysqli_close($conn);

  }
  ?>
    <div class='offer' style='margin:250px 0 250px 0;'>
    <div class='small-container'>
       <div class='row'>
          <div class='col-2'>
             <h1>Registration Completed</h1>
              <br>
             <a href='account.php' class='btn'>Login Now</a>
             <a href='index.php' class='btn'>Later</a>
          </div>
       </div>
    </div>
 </div>
