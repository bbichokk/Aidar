<?php
if (isset($_POST["username"]) && isset($_POST["usercantidad"]) && isset($_POST["userdescription"]) && isset($_POST["userprecio"]) && isset($_POST["usercategoria"])) {
      
    $con = mysqli_connect("localhost", "root", "", "armas");
    if (!$con) {
      die("Error: " . mysqli_connect_error());
    }
    $name = mysqli_real_escape_string($con, $_POST["username"]);
    $cantidad = mysqli_real_escape_string($con, $_POST["usercantidad"]);
    $description = mysqli_real_escape_string($con, $_POST["userdescription"]);
    $precio = mysqli_real_escape_string($con, $_POST["userprecio"]);
    $categoria = mysqli_real_escape_string($con, $_POST["usercategoria"]);
    
    $sql = "INSERT INTO producto (nombre,cantidad,descripcion,precio,categoria) VALUES ('$name',$cantidad,'$description',$precio,$categoria)";
        if(mysqli_query($con, $sql)){
        echo "Datos añadidos con éxito";
    } else{
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>
<br>
<a href="add_producto.php">Back</a>
