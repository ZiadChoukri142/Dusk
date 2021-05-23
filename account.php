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
   <!-- Login / Register -->
   <div class="account-page">
      <div class="container">
         <div class="row">
            <div class="col-2">
               <img src="../static/images/image1.png" width="100%">
            </div>
            <div class="col-2">
               <div class="form-container">
                  <div class="form-btn">
                     <span onclick="login()">Login</span>
                     <span onclick="register()">Register</span>
                     <hr id="Indicator">
                  </div>
                  <form id="LoginForm" method="POST" action="login.php">
                     <input type="text" placeholder="Username" name="username" required>
                     <input type="password" placeholder="Password" name="password" required>
                     <button type="submit" class="btn" name="login">Login</button>
                     <a href="">Forgot Password</a>
                  </form>
                  <form id="RegForm" method="POST" action="register.php">
                     <input type="text" placeholder="Username" name="username" required>
                     <input type="email" placeholder="Email" name="email" required>
                     <input type="password" placeholder="Password" name="password" minlength="8" maxlength="24" required>
                     <button type="submit" class="btn" name="register">Register</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Login / Register -->
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