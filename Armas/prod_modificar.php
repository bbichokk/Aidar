<?php
include_once 'connectsql.php';
include "header.php";
$result = mysqli_query($con,"SELECT * FROM producto");
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

	<a href="productos.php" style="color:tomato">BACK</a>

<table border="1" solid="1">
	  <tr>
	    <td><h2>ID</h2></td>
		<td><h2>Nombre</h2></td>
		<td><h2>Cantidad</h2></td>
        <td><h2>Descripcion</h2></td>
		<td><h2>Precio</h2></td>
        <td><h2>Categoria</h2></td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["id_producto"]; ?></td>
		<td><?php echo $row["nombre"]; ?></td>
		<td><?php echo $row["cantidad"]; ?></td>
        <td><?php echo $row["descripcion"]; ?></td>
		<td><?php echo $row["precio"]; ?></td>
        <td><?php echo $row["categoria"]; ?></td>
		<td><a href="prod_modificar2.php?id=<?php echo $row["id_producto"]; ?>">Update</a></td>
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
<?php
include"footer.php";
?>
