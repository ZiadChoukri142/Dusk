
<?php include_once('./admin/includes/admin-functions.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
</head>
<body>
<div id="content">
<div class="container" style="margin:100px; display:flex; justify-content:center;">
  <form method="POST" action="product-insert.php" enctype="multipart/form-data">

  	<input type="hidden" name="size" value="1000000">
  	<input type="file" name="image">
    <label>Name</label>
    <input type="text" name="name">
    <label>Price</label>
    <input type="text" name="price">
    <label>Description</label>
    <input type="text" name="description">
    <label>Category</label>
    <input type="text" name="category_id">

    <br>

  	<button type="submit" name="upload">POST</button>

  </form>
</div>
</body>
</html>