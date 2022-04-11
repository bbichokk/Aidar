<?php
include_once 'connectsql.php';

if(count($_POST)>0) {
mysqli_query($con,"UPDATE categoria set id_categoria='" . $_POST['id'] . "', nombre='" . $_POST['nombre'] . "' WHERE id_categoria= '" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM categoria WHERE id_categoria='" . $_GET['id'] . "'");
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
<a href="categ_modificar.php">Producto List</a>
</div>
Id: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id_categoria']; ?>">
<input type="text" name="id"  value="<?php echo $row['id_categoria']; ?>">
<br>
Nombre: <br>
<input type="text" name="nombre" class="txtField" value="<?php echo $row['nombre']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>