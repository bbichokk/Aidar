<a href="borrar_cliente.php">Cliente List</a>
<br>
<?php
include_once 'connectsql.php';
$sql = "DELETE FROM clientes WHERE id_cliente='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>