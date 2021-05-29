<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!-- Functions -->
<!-- Functions -->

<!-- Config File -->
<?php include ('config.php'); ?>

<!-- Config File -->
<!-- Header -->
<?php include ('./includes/header.php'); ?>

<!-- Header -->
<body>
   <div class="header">
      <div class="container">
         <!-- Navbar -->
         <?php include('./includes/navbar.php'); ?>

         <!-- Navbar -->

         <!-- Logged in -->
            <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
            ?>
            </h3>
        </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p> <a href="index.php?logout='1'"><img src="../static/images/logout.png" width="75px"></a> </p>
        <?php endif ?>
    </div>
	    <!-- Logged in -->

         <!-- Banner -->
         <div class="row">
            <div class="col-2">
               <p class="quote">
                  Give Your Workout <br />
                  A New Style!
               </p>
               <p class="text">
                  Success isn't always about greatness, it's about consistency.
                  Consistent <br />
                  hard work gains success. Greatness will come.
               </p>
               <a href="../products.php" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
               <img src="../static/images/image1.png" />
            </div>
         </div>
         <!-- Banner -->
      </div>
   </div>	

      <!-- Categories -->
      <div class="categories">
      <div class="small-container">
      <h2 class="title">Categories</h2>
         <div class="row">
            <?php
$query = mysqli_query($conn, "SELECT * FROM categories");
while ($row = mysqli_fetch_array($query))
{
    $id = $row['id'];
    $name = $row["name"];
    $category_picture = $row["picture"];
    $date = $row["created_at"];
?>
            <div class="col-3">
            <?php
    echo "<img src='../static/images/" . $category_picture . "' >";
?>            
            </div>
            <?php
}
?>
         </div>
      </div>
   </div>

   <!-- Categories -->
   <!-- Products -->
   <div class="small-container">
      <h2 class="title">Featured Products</h2>
      <div class="row">
         <?php
$query = mysqli_query($conn, "SELECT * FROM products");
while ($row = mysqli_fetch_array($query))
{
    $id = $row['id'];
    $name = $row["name"];
    $price = $row["price"];
    $picture = $row["picture"];
    $description = substr($row["description"], 0, 200);
    $date = $row["created_at"];

?>
         <div class="col-4"><a href="product-details.php?id=<?php echo $id;?>">
            <?php
    echo "<img src='../static/images/" . $row['picture'] . "' >";
?>
</a>
            <h4><?php
    echo "$name";
?></h4>
            <p>$<?php
    echo "$price";
?></p>
         <a href="../cart.php" class="btn" style="display: flex; justify-content: center;">Add To cart</a>
         </div>
         <?php
}
?>
      </div>
   </div>
   <!-- Products -->
   </div>
   </div>
   <!-- Exclusive Offer -->
   <div class="offer">
      <div class="small-container">
         <div class="row">
            <div class="col-2">
               <img src="./static/images/exclusive.png" class="offer-image">
            </div>
            <div class="col-2">
               <p>Exclusifly Available on Dusk!</p>
               <h1>Smart Band Mark4</h1>
               <small>The Mi Smart Band Mk4 features a 39.9% larger (than Mi Band Mk3) AMOLED
               color full-touch display with adjustable brightness, so everything is clear as can be.
               </small> <br>
               <a href="" class="btn">Buy Now &#8594;</a>
            </div>
         </div>
      </div>
   </div>
   <!-- Exclusive Offer -->
   <!-- Testimonial -->
   <div class="testimonial">
      <div class="small-container">
         <div class="row">
                     <?php
            $query = mysqli_query($conn, "SELECT * FROM contact");
            while ($row = mysqli_fetch_array($query))
            {
               $username = $row["username"];
               $useremail = $row["email"];
               $message = $row["msg"];
               $user_pfp = $row["profile_picture"];
               $date = $row["created_at"];

            ?>
            <div class="col-3">
               <i class="fas fa-quote-left"></i>
               <p>
                  <?php echo "$message";  ?>
               </p>
               <?php echo "<img src='../static/images/" . $row['profile_picture'] . "' >";?>
               <h3>  <?php echo "$username";  ?></h3>
            </div>
            <?php
}
?>
         </div>
      </div>
   </div>
   <!-- Testimonial -->
   <!-- Brands -->
   <div class="brands">
      <div class="small-container">
         <div class="row">
            <div class="col-5">
               <img src="./static/images/logo-godrej.png">
            </div>
            <div class="col-5">
               <img src="./static/images/logo-oppo.png">
            </div>
            <div class="col-5">
               <img src="./static/images/logo-coca-cola.png">
            </div>
            <div class="col-5">
               <img src="./static/images/logo-paypal.png">
            </div>
            <div class="col-5">
               <img src="./static/images/logo-philips.png">
            </div>
         </div>
      </div>
   </div>
   <!-- Brands -->
   <!-- Footer -->
   <?php
include_once ('./includes/footer.php');
?>
   <!-- Footer -->
   <!-- Scripts -->
   <!-- Burger Menu -->
   <script>
      var MenuItems = document.getElementById("MenuItems");
      
      MenuItems.style.maxHeight = "0px";
      
      function menutoggle(){
          if(MenuItems.style.maxHeight == "0px")
          {
           MenuItems.style.maxHeight = "200px";
          }
          else
          {
           MenuItems.style.maxHeight = "0px";
          }
      }
   </script>
   <!-- Burger Menu -->
   <!-- Scripts -->
</body>