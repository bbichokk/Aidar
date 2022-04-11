<?php
    include "connectsql.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login admin</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <center>
    </head>
    <body>
        <div class="login">
            <h1>Login admin</h1>
            <form action="process_log.php" method="post">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="login" placeholder="Username" >
                <label for="password">
                    <br>
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" >
                <br>
                <input type="submit" value="Login">
            </form>
        </div>
       
    </body>
</html>
</center>