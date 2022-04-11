<a href="borrar_user.php">Producto List</a>
<br>
<?php
include_once 'connectsql.php';
$sql = "DELETE FROM empleado WHERE id_empleado='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>