<?php

#DELETE PRODUCTS

include_once '../config.php';
$sql = "DELETE FROM products WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: ../admin/dashboard.php");

?>

<?php

#DELETE CATEGORY

include_once '../config.php';
$sql = "DELETE FROM categories WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

header("Location: ../admin/dashboard.php");

?>