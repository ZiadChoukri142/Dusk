<?php 
	session_start();

	// connect to database

    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=ecommerce_site", $username, $password);
        
    // verify connection

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}       catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>