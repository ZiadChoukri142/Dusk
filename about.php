<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!-- Functions -->
<!-- Functions -->

<!-- Config File -->
<?php include ('config.php'); ?>

<!-- Config File -->
<!-- Header -->
<?php include ('./includes/header.php'); ?>

<!-- Header -->
<body>
      <div class="container">
         <!-- Navbar -->
         <?php include('./includes/navbar.php'); ?>
         <br><br><br><br><br>
         <!-- Navbar -->
      </div>
      <div class="account-page">
         <div class="row">
            <div class="col-1" style="text-align: center; margin: 100px;">
               <p class="quote">
                  Website origins
               </p>
               <p class="text" style="text-align: center;">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Laboriosam voluptatum temporibus ipsum id quidem saepe eos  <br>similique, sapiente minus accusamus aperiam! Magnam fugit corporis <br>cupiditate at alias placeat architecto deserunt assumenda reiciendis earum dolorem, sunt iusto. <br> At aliquam, quidem, enim id facilis veritatis nostrum error eligendi adipisci dolorum illo maxime?
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container">
<div class="testimonial">
      <div class="small-container">
         <div class="row">
            <div class="col-3">
               <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
               </p>
               <img src="./static/images/user-1.png">
               <h3>Developer 1</h3>
            </div>
            <div class="col-3">
               <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
               </p>
               <img src="./static/images/user-2.png">
               <h3>Developer 2</h3>
            </div>
            <div class="col-3">
               <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
               </p>
               <img src="./static/images/user-3.png">
               <h3>Developer 3</h3>
            </div>
         </div>
      </div>
   </div>
</div>
</div>

   <!-- Footer -->
   <?php
include_once ('./includes/footer.php');
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