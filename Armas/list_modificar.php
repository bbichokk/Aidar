<?php
include_once 'connectsql.php';
$result = mysqli_query($con,"SELECT * FROM compra");
?>
<!DOCTYPE html>
<html>
 <head>
   <title>  </title>
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
		<td>fecha</td>
		<td>importe</td>
        <td>cliente</td>
		<td>empleado</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["id_compra"]; ?></td>
		<td><?php echo $row["fecha"]; ?></td>
		<td><?php echo $row["importe"]; ?></td>
        <td><?php echo $row["cliente"]; ?></td>
		<td><?php echo $row["empleado"]; ?></td>
		<td><a href="list_modificar2.php?id=<?php echo $row["id_compra"]; ?>">Update</a></td>
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