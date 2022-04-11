<?php
include_once 'connectsql.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE clientes set id_cliente='" . $_POST['id'] . "', nombre='" . $_POST['nombre'] . "', apellido='" . $_POST['apellido'] . "', fecha_alta='" . $_POST['fecha_alta'] . "', telefono='" . $_POST['telefono'] . "', direccion='" . $_POST['direccion'] . "' WHERE id_cliente='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM clientes WHERE id_cliente='" . $_GET['id'] . "'");
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
<a href="client_modificar.php">Client List</a>
</div>
Id: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id_cliente']; ?>">
<input type="text" name="id"  value="<?php echo $row['id_cliente']; ?>">
<br>
Nombre: <br>
<input type="text" name="nombre" class="txtField" value="<?php echo $row['nombre']; ?>">
<br>
apellido :<br>
<input type="number" name="apellido" class="txtField" value="<?php echo $row['apellido']; ?>">
<br>
fecha_alta :<br>
<input type="date" name="fecha_alta" class="txtField" value="<?php echo $row['fecha_alta']; ?>">
<br>
telefono :<br>
<input type="number" name="telefono" class="txtField" value="<?php echo $row['telefono']; ?>">
<br>
direccion :<br>
<input type="text" name="direccion" class="txtField" value="<?php echo $row['direccion']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>
<br>
<a href="cliente_modificar2.php">Back</a>