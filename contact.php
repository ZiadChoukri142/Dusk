<!-- Config File -->
<?php
   include ('./config.php');
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
   <!-- Functions -->
   <?php
      include_once('./includes/functions.php');
      ?>
   <!-- Functions -->

   <div class="account-page">
         <div class="container">
            <div class="row"> 
               <div class="col-2">
                  <div class="form-container">
                     <div class="form-btn">
                        <span">Give Us Feedback :)</span>
                     </div>
                     <form method="POST" action="contact.php" enctype="multipart/form-data">
                     <input type="text" placeholder="User Name" name="username" required>
                        <input type="email" placeholder="Email" name="useremail" required>
                        <input type="text" placeholder="Message" name="message" required>
                        <input type="hidden" name="size" value="1000000"><br>
                        <input type="file" name="user_pfp" required> <br>
                        <button type="submit" name="contact" class="btn">Post</button>
                     </form>
                  </div>
               </div>
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