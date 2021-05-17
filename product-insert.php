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


        </div>
          <!-- Functions -->
                <?php
include_once('./admin/includes/admin-functions.php');
?>
         <!-- Functions -->

            <div class="form-container">
              <div class="row">
              <div class="col-2">
                <form method="POST" action="product-insert.php" enctype="multipart/form-data">

                          <!-- Name -->
                <label>Name</label> <br>
                  <input type="text" name="name"> <br>
                          <!-- Price -->
                <label>Price</label> <br>
                  <input type="text" name="price"> <br>
                          <!-- Description -->
                <label>Description</label> <br>
                  <input type="text" name="description"> <br>
                          <!-- Category -->
                <label>Category</label> <br>
                  <input type="text" name="category_id"> <br>
                          <!-- Picture -->
                <label>Choose Product Image</label>
                  <input type="hidden" name="size" value="1000000"><br>
                  <input type="file" name="image"> <br>
                          <!-- Submit -->
              <button type="submit" name="upload" class="btn">POST</button>

                </form>
              </div>
              <div class="col-2">
                <img src="./static/images/image1.png" />
                </div>
              </div>
            </div>
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