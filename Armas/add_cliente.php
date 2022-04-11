<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8" />
</head>
<body>
<h3>Añadir nuevo cliente</h3>
<form action="add_cliente2.php" method="post">
    <p>Nombre:
    <input type="text" name="clientname" /></p>
    <p>Apellido:
    <input type="text" name="clientapellido" /></p>
    <p>Fecha_alta:
    <input type="date" name="clientfecha" /></p>
    <p>Telefono:
    <input type="number" name="clienttelefono" /></p>
    <p>Direccion:
    <input type="text" name="clientdireccion" /></p>

    <input type="submit" value="Añadir">
</form>
</body>
</html>
<br>
<a href="clientes_compras.php">Back</a>
