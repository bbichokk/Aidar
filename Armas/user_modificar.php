<?php
include_once 'connectsql.php';
$result = mysqli_query($con,"SELECT * FROM empleado");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> </title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<a href="empleados.php">Back</a>
<table>
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
	  <tr>
	    <td><?php echo $row["id_empleado"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["pass"]; ?></td>
		<td><?php echo $row["rights"]; ?></td>
        <td><?php echo $row["fecha_alta"]; ?></td>
		<td><a href="user_modificar2.php?id=<?php echo $row["id_empleado"]; ?>">Update</a></td>
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