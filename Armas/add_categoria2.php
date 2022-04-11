<?php
if (isset($_POST["username"])) {
      
    $con = mysqli_connect("localhost", "root", "", "armas");
    if (!$con) {
      die("Error: " . mysqli_connect_error());
    }
    $name = mysqli_real_escape_string($con, $_POST["username"]);
    
    $sql = "INSERT INTO categoria (nombre) VALUES ('$name')";
        if(mysqli_query($con, $sql)){
        echo "Datos añadidos con éxito";
    } else{
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>
<br>
<a href="add_categoria.php">Back</a>