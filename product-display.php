<?php require_once('config.php') ?>
<?php include_once('./includes/header.php'); ?>
<?php include_once('./includes/functions.php'); ?>



<?php 

$query= mysqli_query( $conn ,"select * from products");
while($row=mysqli_fetch_array($query))
{
    $id=$row['id'];
    $name=$row["name"];
    $price=$row["price"];
    $picture=$row["picture"];
    $description= substr($row["description"],0,200);
    $date=$row["created_at"];


?>

<div class="row">
    <div class="col-3">
        <h3><?php echo "$name";  ?></h3>
        <p><?php echo "$price";  ?></p>
        <p><?php echo "$description";  ?></p>
        <p><?php echo "$date";  ?></p>
        <?php
      	echo "<img src='./static/images/".$row['picture']."' >";
  ?>    
  </div>
</div>

<?php
}
?>