<?php
include_once 'connectsql.php';
$result = mysqli_query($con,"SELECT * FROM categoria");
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
<table>
	  <tr>
	    <td>id</td>
		<td>nombre</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["id_categoria"]; ?></td>
		<td><?php echo $row["nombre"]; ?></td>
		<td><a href="categ_modificar2.php?id=<?php echo $row["id_categoria"]; ?>">Update</a></td>
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
<br>
<a href="categorias.php">Back</a>