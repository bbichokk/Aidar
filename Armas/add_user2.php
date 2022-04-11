<?php
include"connectsql.php";

if (isset($_POST["useremail"]) && isset($_POST["username"]) && isset($_POST["userpassword"]) && isset($_POST["userrights"]) && isset($_POST["userfecha"])) {
      
    $con = mysqli_connect("localhost", "root", "", "armas");
    if (!$con) {
      die("Error: " . mysqli_connect_error());
    }
    $email = mysqli_real_escape_string($con, $_POST["useremail"]);
    $name = mysqli_real_escape_string($con, $_POST["username"]);
    $pass = mysqli_real_escape_string($con, $_POST["userpassword"]);
    $rights = mysqli_real_escape_string($con, $_POST["userrights"]);
    $fecha = mysqli_real_escape_string($con, $_POST["userfecha"]);
    
    $sql = "INSERT INTO empleado (email,username,pass,rights,fecha_alta) VALUES ('$email',$name,'$pass',$rights,$fecha)";
        if(mysqli_query($con, $sql)){
        echo "Datos añadidos con éxito";
    } else{
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>