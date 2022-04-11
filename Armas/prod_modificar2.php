<?php
include_once 'connectsql.php';
include "header.php";

if(count($_POST)>0) {
mysqli_query($con,"UPDATE producto set id_producto='" . $_POST['id'] . "', nombre='" . $_POST['nombre'] . "', cantidad='" . $_POST['cantidad'] . "', descripcion='" . $_POST['descripcion'] . "', precio='" . $_POST['precio'] . "', categoria='" . $_POST['categoria'] . "' WHERE id_producto='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM producto WHERE id_producto='" . $_GET['id'] . "'");
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
<a href="add_modificar.php">Producto List</a>
</div>
<center>
Id: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id_producto']; ?>">
<input type="text" name="id"  value="<?php echo $row['id_producto']; ?>">
<br>
Nombre: <br>
<input type="text" name="nombre" class="txtField" value="<?php echo $row['nombre']; ?>">
<br>
Cantidad :<br>
<input type="number" name="cantidad" class="txtField" value="<?php echo $row['cantidad']; ?>">
<br>
Descripcion :<br>
<input type="text" name="descripcion" class="txtField" value="<?php echo $row['descripcion']; ?>">
<br>
Precio :<br>
<input type="number" name="precio" class="txtField" value="<?php echo $row['precio']; ?>">
<br>
Categoria :<br>
<input type="number" name="categoria" class="txtField" value="<?php echo $row['categoria']; ?>">
<br>
<br>
<input type="submit" name="submit" value="Cambiar" class="buttom">
</center>
</form>
</body>
</html>
<br>

<?php
include "footer.php";
?>