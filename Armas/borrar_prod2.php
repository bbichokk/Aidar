<a href="borrar_prod.php">Producto List</a>
<br>
<?php
include_once 'connectsql.php';
$sql = "DELETE FROM producto WHERE id_producto='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>