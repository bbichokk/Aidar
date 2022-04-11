<?php
if (isset($_POST["clientname"]) && isset($_POST["clientapellido"]) && isset($_POST["clientfecha"]) && isset($_POST["clienttelefono"]) && isset($_POST["clientdireccion"])) {
      
    $con = mysqli_connect("localhost", "root", "", "armas");
    if (!$con) {
      die("Error: " . mysqli_connect_error());
    }
    $name = mysqli_real_escape_string($con, $_POST["clientname"]);
    $apellido = mysqli_real_escape_string($con, $_POST["clientapellido"]);
    $fecha = mysqli_real_escape_string($con, $_POST["clientfecha"]);
    $telefono = mysqli_real_escape_string($con, $_POST["clienttelefono"]);
    $direccion = mysqli_real_escape_string($con, $_POST["clientdireccion"]);
    
    $sql = "INSERT INTO clientes (nombre,apellido,fecha_alta,telefono,direccion) VALUES ('$name','$apellido',$fecha,$telefono,'$direccion')";
        if(mysqli_query($con, $sql)){
        echo "Datos añadidos con éxito";
    } else{
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>
<br>
<a href="add_cliente.php">Back</a>
