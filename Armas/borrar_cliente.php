<?php
include "connectsql.php";
?>

<?php
include_once 'connectsql.php';
$result = mysqli_query($con,"SELECT * FROM clientes");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Borrar cliente</title>
</head>
<body>
<table>
<br>
<a href="clientes_compras.php">Back</a>
<tr>
	    <td>id</td>
		<td>nombre</td>
		<td>apellido</td>
        <td>fecha_alta</td>
		<td>telefono</td>
        <td>direccion</td>
	  </tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $row["id_cliente"]; ?></td>
		<td><?php echo $row["nombre"]; ?></td>
		<td><?php echo $row["apellido"]; ?></td>
        <td><?php echo $row["fecha_alta"]; ?></td>
		<td><?php echo $row["telefono"]; ?></td>
        <td><?php echo $row["direccion"]; ?></td>
	<td><a href="borrar_cliente2.php?id=<?php echo $row["id_cliente"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>