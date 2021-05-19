<!-- Header -->
<?php require_once ('../config.php') ?>
<!-- Header -->
<!-- Header -->
<?php include_once ('../includes/header.php'); ?>
<!-- Header -->
<body>
   <div class="container">
      <!-- Navbar -->
      <?php include_once ('./includes/admin-navbar.php'); ?>
      <!-- Navbar -->
   </div>
   <!-- Product Board -->
   <h3 style="text-align: center;">All Products</h3>
   <div class="small-container">
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
         <div class="col-4">
            <?php echo "<img src='../static/images/" . $row['picture'] . "' >"; ?>
            <h4><?php echo "$name"; ?></h4>
            <p>$<?php echo "$price"; ?></p>
            <p><?php echo "$description"; ?></p>
            <a href=""><i class="fas fa-trash"></i></a>
            <a href=""><i class="fas fa-edit"></i></a>
         </div>
         <?php
} ?>
      </div>
   </div>
   <!-- Product Board -->

   <!-- Category Board -->
   <h3 style="text-align: center;">All Categories</h3>
   <div class="small-container">
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
         <div class="col-4">
            <?php echo "<img src='../static/images/" . $category_picture . "' >"; ?>
            <h4><?php echo "$name"; ?></h4>
            <p>$<?php echo "$price"; ?></p>
            <p><?php echo "$description"; ?></p>
            <a href=""><i class="fas fa-trash"></i></a>
            <a href=""><i class="fas fa-edit"></i></a>
         </div>
         <?php
} ?>
      </div>
   </div>
   <!-- Category Board -->

</body>
<!-- Footer -->
<?php include_once ('../includes/footer.php'); ?>
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
