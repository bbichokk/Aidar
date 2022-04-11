<?php
    include "connectsql.php";
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8" />
</head>
<body>
<h3>Añadir nuevo empleado</h3>
<form action="add_user2.php" method="post">
    <p>Email:
    <input type="text" name="useremail" /></p>
    <p>Nombre:
    <input type="text" name="username" /></p>
    <p>Password:
    <input type="number" name="userpassword" /></p>
    <p>Rigths:
    <input type="number" name="userrights" /></p>
    <p>fecha_alta:
    <input type="date" name="userfecha" /></p>

    <input type="submit" value="Añadir">
</form>
</body>
</html>