<?php
include_once 'connectsql.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE compra set id_compra='" . $_POST['id'] . "', fecha='" . $_POST['fecha'] . "', importe='" . $_POST['importe'] . "', cliente='" . $_POST['cliente'] . "', empleado='" . $_POST['empleado'] . "' WHERE id_compra='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM compra WHERE id_compra='" . $_GET['id'] . "'");
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
<a href="list_modificar.php">Compra List</a>
</div>
Id: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id_compra']; ?>">
<input type="text" name="id"  value="<?php echo $row['id_compra']; ?>">
<br>
fecha: <br>
<input type="date" name="fecha" class="txtField" value="<?php echo $row['fecha']; ?>">
<br>
importe :<br>
<input type="number" name="importe" class="txtField" value="<?php echo $row['importe']; ?>">
<br>
cliente :<br>
<input type="number" name="cliente" class="txtField" value="<?php echo $row['cliente']; ?>">
<br>
empleado :<br>
<input type="number" name="empleado" class="txtField" value="<?php echo $row['empleado']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>
<br>
