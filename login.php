<?php require_once('config.php') ?>
<?php include_once ('./includes/header.php');?>
<?php

// ********** LOGIN **********

   require_once('config.php');

   if (isset($_POST['login'])) {

    $username = $_POST['username'];  
    $password = $_POST['password']; 
 

   $sql = "SELECT * FROM customers WHERE name = '$username' AND password = '$password'";  
   $result = mysqli_query($conn, $sql);  
   $row    = @mysqli_fetch_array($result, MYSQLI_ASSOC);  
   $count  = @mysqli_num_rows($result);  
     
   if($count == 1){  
    echo "<div class='offer' style='margin:250px 0 250px 0;'>
    <div class='small-container'>
       <div class='row'>
          <div class='col-2'>
             <h1>Login successful</h1>
              <br>
             <a href='index.php' class='btn'>Home</a>
          </div>
       </div>
    </div>
 </div>";
   }  
   else{  
       echo "<script>.alert('Failed to login');.</script>";  
   } 
}

?>  
