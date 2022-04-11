<a href="borrar_categ.php">Categoria List</a>
<br>
<?php
include_once 'connectsql.php';
$sql = "DELETE FROM categoria WHERE id_categoria='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>