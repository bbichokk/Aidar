<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>
    </head>
    <?php
    session_start();
    ?>
    <nav class="navbar sticky-top navbar-toggleable-md navbar-light">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <!--Navbar mio -->
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="main.php">
    <img src="imgarmas/logo(copia)2.png" width="200" height="90" alt="">
  </a>
</nav>





<div class="container">
    <!-- all the links inside mobile menu  -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- left side nav bar  -->
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categorias.php">Categorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="clientes_compras.php">Clientes y compras</a>
      </li>
    </ul>
  </div>
</nav>









