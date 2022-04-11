<?php
include "connectsql.php";
?>

<?php
include_once 'connectsql.php';
$result = mysqli_query($con,"SELECT * FROM categoria");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Borrar categoria</title>
</head>
<body>
<table>
<tr>
	    <td>id</td>
		<td>nombre</td>
	  </tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	    <td><?php echo $row["id_categoria"]; ?></td>
		<td><?php echo $row["nombre"]; ?></td>
	<td><a href="borrar_categ2.php?id=<?php echo $row["id_categoria"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>
<br>
<a href="categorias.php">Back</a>