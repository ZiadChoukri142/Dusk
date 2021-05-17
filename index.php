   <!-- Functions -->
   <?php
require_once('./includes/functions.php');
?>
   <!-- Functions -->

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
    <div class="header">
        <div class="container">

    <!-- Navbar -->
        <?php
include_once('./includes/navbar.php');
?>
   <!-- Navbar -->

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
                    <a href="" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="./static/images/image1.png" />
                </div>
            </div>

    <!-- Banner -->

        </div>
    </div>

    <!-- Categories -->

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="./static/images/category-1.jpg" />
                </div>
                <div class="col-3">
                    <img src="./static/images/category-2.jpg" />
                </div>
                <div class="col-3">
                    <img src="./static/images/category-3.jpg" />
                </div>
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
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p>$<?php
    echo "$price";
?></p>
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
                <div class="col-3">
                <i class="fas fa-quote-left"></i>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <img src="./static/images/user-1.png">
                <h3>Jackie James</h3>
                </div>
                <div class="col-3">
                <i class="fas fa-quote-left"></i>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <img src="./static/images/user-2.png">
                <h3>Charlie Doe</h3>
                </div>
                <div class="col-3">
                <i class="fas fa-quote-left"></i>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <img src="./static/images/user-3.png">
                <h3>Maria Saint</h3>
                </div>
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
include_once('./includes/footer.php');
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