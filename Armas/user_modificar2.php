<?php
include_once 'connectsql.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE empleado set id_empleado='" . $_POST['id'] . "', email='" . $_POST['email'] . "', username='" . $_POST['username'] . "', pass='" . $_POST['pass'] . "', rights='" . $_POST['rights'] . "', fecha_alta='" . $_POST['fecha_alta'] . "' WHERE id_empleado='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM empleado WHERE id_empleado='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="user_modificar.php">Producto List</a>
</div>
Id: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id_empleado']; ?>">
<input type="text" name="id"  value="<?php echo $row['id_empleado']; ?>">
<br>
Email: <br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
Nombre :<br>
<input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<br>
Password :<br>
<input type="text" name="pass" class="txtField" value="<?php echo $row['pass']; ?>">
<br>
Rights :<br>
<input type="number" name="rights" class="txtField" value="<?php echo $row['rights']; ?>">
<br>
Fecha :<br>
<input type="date" name="fecha_alta" class="txtField" value="<?php echo $row['fecha_alta']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>