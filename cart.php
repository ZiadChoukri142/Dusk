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
      </div>
   </div>
   <!-- Navbar -->

   <!-- Cart -->

      <div class="small-container cart-page">
         <table>
            <tr>
               <th>Product</th>
               <th>Quantity</th>
               <th>Subtotal</th>
            </tr>
            <tr>
               <td>
                  <div class="cart-info">
                     <img src="../static/images/buy-1.jpg">
                     <div>
                        <p>Red Printed T-Shirt</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                     </div>
                  </div>
               </td>
               <td><input type="number" value="1" min="1"></td>
               <td>$50.00</td>
            </tr>
         </table>
      </div>

   <!-- Cart -->

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