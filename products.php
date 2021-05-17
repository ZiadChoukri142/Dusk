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
    $id          = $row['id'];
    $name        = $row["name"];
    $price       = $row["price"];
    $picture     = $row["picture"];
    $description = substr($row["description"], 0, 200);
    $date        = $row["created_at"];
    
?>

                
                <div class="col-4">
                        <?php
    echo "<img src='../static/images/" . $row['picture'] . "' >";
?>
                      <h4><?php
    echo "$name";
?></h4>
                            <p>$<?php
    echo "$price";
?></p>
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