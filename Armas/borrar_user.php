<?php
include "connectsql.php";
?>

<?php
include_once 'connectsql.php';
$result = mysqli_query($con,"SELECT * FROM empleado");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Borrar empleado</title>
</head>
<body>
<table>
<a href="empleados.php">Back</a>

<tr>
	    <td>id</td>
		<td>email</td>
		<td>username</td>
        <td>pass</td>
		<td>rights</td>
        <td>fecha_alta</td>
	  </tr>
      <?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	    <td><?php echo $row["id_empleado"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["pass"]; ?></td>
		<td><?php echo $row["rights"]; ?></td>
        <td><?php echo $row["fecha_alta"]; ?></td>
	<td><a href="borrar_user2.php?id=<?php echo $row["id_empleado"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>