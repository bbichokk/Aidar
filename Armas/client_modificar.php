<?php
include_once 'connectsql.php';
$result = mysqli_query($con,"SELECT * FROM clientes");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<br>
<a href="clientes_compras.php">Back</a>
<table>
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
	  <tr>
	    <td><?php echo $row["id_cliente"]; ?></td>
		<td><?php echo $row["nombre"]; ?></td>
		<td><?php echo $row["apellido"]; ?></td>
        <td><?php echo $row["fecha_alta"]; ?></td>
		<td><?php echo $row["telefono"]; ?></td>
        <td><?php echo $row["direccion"]; ?></td>
		<td><a href="client_modificar2.php?id=<?php echo $row["id_cliente"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>