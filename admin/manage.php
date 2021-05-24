<!-- Config File -->
<?php
   require_once('../config.php');
   ?>
<!-- Config File -->
<!-- Header -->
<?php
   include_once('../includes/header.php');
   ?>
<!-- Header -->
<body>
   <div class="container">
      <!-- Navbar -->
      <?php
         include_once('../admin/includes/admin-navbar.php'); 
         ?>
      <!-- Navbar -->
   </div>
   <!-- Functions -->
   <?php
      include_once('../admin/includes/admin-functions.php');
      ?>
   <!-- Functions -->

   <div class="account-page">
         <div class="container">
            <div class="row"> 
               <div class="col-2">
                  <div class="form-container">
                     <div class="form-btn">
                        <span onclick="login()">New Product</span>
                        <span onclick="register()">New Category</span>
                        <hr id="Indicator">
                     </div>

                     <form method="POST" action="manage.php" enctype="multipart/form-data" id="LoginForm">
                        <input type="text" placeholder="Product Name" name="name" required>
                        <input type="text" placeholder="Product Price" name="price" required>
                        <input type="text" placeholder="Description" name="description" required>
                        <select name="category" style="  width: 100%;" name="category" required>
                        <?php
                           $query = mysqli_query($conn, "SELECT * FROM categories");
                           while ($row = mysqli_fetch_array($query))
                           {
                              $name = $row["name"];
                           ?>
                           <option><?php echo "$name";?></option>
                           <?php } ?>
                        </select>
                        <input type="hidden" name="size" value="1000000"><br>
                        <input type="file" name="image" required> <br>
                        <button type="submit" name="upload_product" class="btn">Post</button>
                     </form>
                     <form method="POST" action="manage.php" enctype="multipart/form-data" id="RegForm">
                        <input type="text" placeholder="Category" name="category_name">
                        <input type="hidden" name="size" value="1000000"><br>
                        <input type="file" name="category_image"><br>
                        <button type="submit" name="upload_category" class="btn">Post</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

   <!-- Footer -->
   <?php
      include_once('../includes/footer.php');
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

   <!-- Form Toggle -->

   <script>
         var LoginForm = document.getElementById("LoginForm");
         var RegForm = document.getElementById("RegForm");
         var Indicator = document.getElementById("Indicator");

            function register(){
               RegForm.style.transform = "translateX(0px)";
               LoginForm.style.transform = "translateX(0px)";
               Indicator.style.transform = "translateX(100px)";
            }

            function login(){
               RegForm.style.transform = "translateX(300px)";
               LoginForm.style.transform = "translateX(300px)";
               Indicator.style.transform = "translateX(0px)";
            }

      </script>

   <!-- Form Toggle -->

   <!-- Scripts -->
</body>