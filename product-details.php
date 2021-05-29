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
<!-- Header -->
<?php include_once('./includes/header.php'); ?>
<!-- Header -->
   
<!-- Config File -->
<?php
require_once ('config.php');
?>
<!-- Config File -->
<body>
   <div class="container">
      <!-- Navbar -->
      <?php include_once('./includes/navbar.php'); ?>
      <!-- Navbar -->
   </div>
   <!-- Single Product Details -->
   <div class="small-container single-product">
      <div class="row">
      <?php
      $product_id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM products WHERE id='$product_id'");
    $row = mysqli_fetch_array($query);
    $id = $row['id'];
    $name = $row["name"];
    $price = $row["price"];
    $picture = $row["picture"];
    $description = substr($row["description"], 0, 200);
    $category = $row["category"];
    $date = $row["created_at"];

?>
         <div class="col-2">
            <?php
            echo "<img src='../static/images/" . $row['picture'] . "' width='100%' id='productImg'>";
            ?>
         </div>
         <div class="col-2">
            <p>Home / <?php echo "$category";?></p>
            <h1><?php echo "$name";?></h1>
            <h4>$<?php echo "$price";?></h4>
            <a href="../cart.php" class="btn">Add To Cart</a>
            <h3>Product Details<i class="fa fa-indent"></i></h3>
            <p><?php echo "$description";?></p>
         </div>
      </div>
   </div>
   <!-- Single Product Details -->
   <!-- Title -->
   <div class="small-container">
      <div class="row row-2">
         <h2>More Products</h2>
      </div>
   </div>
   <!-- Title -->
   <!-- See More -->
   <div class="small-container">
      <div class="row">
         <?php
            $query = mysqli_query($conn, "SELECT * FROM products");
            while ($row = mysqli_fetch_array($query)) {
                
            ?>
         <div class="col-4">
            <from method="GET" action="products.php?id=<?php echo $row['id'] ?>">
               <a href="product-details.php?id=<?php echo $row['id'] ?>">
                  <img src="./static/images/<?= $row['picture'] ?>">
               </a>
               <h4><?= $row['name']?></h4>
               <?= $row['description']?> <br>
               <p>$<?= number_format($row['price'], 2)?></p>
               <input type="hidden" name="name" value="<?= $row['name'] ?>">
               <input type="hidden" name="price" value="<?= $row['price']  ?>">
            </form>
      </div>

         <?php
            }
            ?>   
   </div>
</div>
   <!-- See More -->
   <!-- Footer -->
   <?php include_once('./includes/footer.php'); ?>
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
   <!-- Product Gallery -->
   <script>
      var productImg = document.getElementById("productImg");
      var smallImg = document.getElementsByClassName("small-img");
      
      smallImg[0].onclick = function()
      {
          productImg.src = smallImg[0].src;
      }
      smallImg[1].onclick = function()
      {
          productImg.src = smallImg[1].src;
      }
      smallImg[2].onclick = function()
      {
          productImg.src = smallImg[2].src;
      }
      smallImg[3].onclick = function()
      {
          productImg.src = smallImg[3].src;
      }
   </script>
   <!-- Product Gallery -->
   <!-- Scripts -->
</body>