<?php
session_start();

require_once("connectsql.php");

$username = $con->real_escape_string($_POST["login"]);
$password = $con->real_escape_string($_POST["password"]);

$query="SELECT * FROM empleado WHERE email='".$username."' AND pass='".$password."'";

$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        if($row["rights"]===1) $_SESSION["isAdmin"] = true;
        else $_SESSION["isAdmin"] = false;
    }

    header("Location: admin.php");
} else {
    
    header("Location: login.php");
}

?>


