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
<!-- Config File -->
<?php
   require_once('config.php');
   ?>
<!-- Config File -->
<!-- Header -->
<?php
   include_once('./includes/header.php');
   ?>
<!-- Header -->
<body>
   <div class="container">
      <!-- Navbar -->
      <?php
         include_once('./includes/navbar.php');
         ?>
      <!-- Navbar -->
   </div>
   <!-- Featured -->
   <div class="small-container">
      <div class="row row-2">
         <h2>All Products</h2>
         <select>
            <option>Default Sorting</option>
            <option>Sort by Price</option>
            <option>Sort by Popularity</option>
            <option>Sort by Rating</option>
            <option>Sort by Scale</option>
         </select>
      </div>
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
               <a href="product-details.php?id=<?php echo $row['id'] ?>"><input type="submit" method="post" class="btn" name="add_to_cart" value="See Details"></a>
            </form>
         </div>
         <?php
            }
            ?>
      </div>
      <div class="page-btn">
         <span>1</span>
         <span>2</span>
         <span>3</span>
         <span>4</span>
         <span>&#8594;</span>
      </div>
   </div>
   <!-- Featured -->
   <!-- Footer -->
   <?php
      include_once('./includes/footer.php');
      ?>
   <!-- Footer -->
   <!-- Scripts -->
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
   <!-- Scripts -->
</body>