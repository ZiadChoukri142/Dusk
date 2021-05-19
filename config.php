<?php 
   session_start();
   
   // connect to database
   
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "ecommerce_site";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
   
   ?>