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
      <div class="container">
   <!-- Navbar -->
   <?php
      include_once('./includes/navbar.php');
      ?>
      </div>

   <!-- Navbar -->

   <!--  -->

      <div class="account-page">
         <div class="container">
            <div class="row">
               <div class="col-2">
                  <img src="../static/images/image1.png" width="100%">
               </div>
               <div class="col-2">
                  <div class="form-container">
                     <div class="form-btn">
                        <span>Login</span>
                        <span>Register</span>
                        <hr id="indicator">
                     </div>

                     <form id="loginForm">
                        <input type="text" placeholder="Username">
                        <input type="password" placeholder="Password">
                        <button type="submit" class="btn">Login</button>
                        <a href="">Forgot Password</a>
                     </form>
                     <form id="regForm">
                        <input type="text" placeholder="Username">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Password">
                        <button type="submit" class="btn">Register</button>
                     </form>

                  </div>
               </div>
            </div>
         </div>
      </div>

   <!--  -->

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