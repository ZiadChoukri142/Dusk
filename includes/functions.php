<?php
if (isset($_POST['message'])) {

$username        = $_POST['username'];
$useremail       = $_POST['useremail'];
$message         = $_POST['message'];
$filename        = $_FILES["user_pfp"]["name"];
$tempname        = $_FILES["user_pfp"]["tmp_name"];
$folder          = "../static/images/".$filename;

$conn = mysqli_connect("localhost", "root", "", "ecommerce_site");

    $sql = "INSERT INTO contact (username,email,profile_picture,msg) VALUES ('$username', '$useremail','$filename', '$message')";

    mysqli_query($conn, $sql);

}
$result = mysqli_query($conn, "SELECT * FROM contact");
?>