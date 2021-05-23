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
      $product_id = $_REQUEST['id'];
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
            <div class="small-img-row">
               <div class="small-img-col">
                  <img src="./static/images/gallery-1.jpg" width="100%" class="small-img">
               </div>
               <div class="small-img-col">
                  <img src="./static/images/gallery-2.jpg" width="100%" class="small-img">
               </div>
               <div class="small-img-col">
                  <img src="./static/images/gallery-3.jpg" width="100%" class="small-img">
               </div>
               <div class="small-img-col">
                  <img src="./static/images/gallery-4.jpg" width="100%" class="small-img">
               </div>
            </div>
         </div>
         <div class="col-2">
            <p>Home / <?php echo "$category";?></p>
            <h1><?php echo "$name";?></h1>
            <h4>$<?php echo "$price";?></h4>
            <select>
               <option>Select Size</option>
               <option>XXL</option>
               <option>XL</option>
               <option>Large</option>
               <option>Medium</option>
               <option>Small</option>
            </select>
            <input type="number" value="1" min="1">
            <a href="" class="btn">Add To Cart</a>
            <h3>Product Details<i class="fa fa-indent"></i></h3>
            <p><?php echo "$description";?></p>
         </div>
      </div>
   </div>
   <!-- Single Product Details -->
   <!-- Title -->
   <div class="small-container">
      <div class="row row-2">
         <h2>Related Products</h2>
         <p>View More</p>
      </div>
   </div>
   <!-- Title -->
   <!-- Related Products -->
   <div class="small-container">
      <div class="row">
         <div class="col-4">
            <img src="./static/images/product-5.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="far fa-star"></i>
            </div>
            <p>$50.00</p>
         </div>
      </div>
   </div>
   <!-- Related Products -->
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