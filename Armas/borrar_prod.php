<?php
include "connectsql.php";
?>

<?php
include_once 'connectsql.php';
$result = mysqli_query($con,"SELECT * FROM producto");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Borrar producto</title>
</head>
<body>
<table>
<br>
<a href="productos.php">Back</a>
<tr>
	    <td>id</td>
		<td>nombre</td>
		<td>cantidad</td>
        <td>descripcion</td>
		<td>precio</td>
        <td>categoria</td>
	  </tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	    <td><?php echo $row["id_producto"]; ?></td>
		<td><?php echo $row["nombre"]; ?></td>
		<td><?php echo $row["cantidad"]; ?></td>
        <td><?php echo $row["descripcion"]; ?></td>
		<td><?php echo $row["precio"]; ?></td>
        <td><?php echo $row["categoria"]; ?></td>
	<td><a href="borrar_prod2.php?id=<?php echo $row["id_producto"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>