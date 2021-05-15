       
    <!-- Header -->
    <?php include_once('./includes/header.php'); ?>
    <!-- Header -->

<body>
        <div class="container">

            <!-- Navbar -->
                <?php include_once('./includes/navbar.php'); ?>
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
            <div class="col-4">
                <img src="./static/images/product-1.jpg">
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
            <div class="col-4">
                <img src="./static/images/product-2.jpg">
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
            <div class="col-4">
                <img src="./static/images/product-3.jpg">
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
            <div class="col-4">
                <img src="./static/images/product-4.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
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
       
        <?php include_once('./includes/footer.php'); ?>
    
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
