<?php
include "header.php"
?>
<center>
<h1 style="color: #800000;"><i>Hello Admin</i></h1>
</center>

<br>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="empleados.php">Empleados</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="productos.php">Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="categorias.php">Categorias</a>
  </li>
</ul>



<div style="text-align: center;padding-top: 1em;font-family: PT Serif;font-size: 48px;color: #800000;flex: 0 0 20%;">Tienda de cazadores «AJ»</div>
<br>

<div class="container-fluid text-rigth">
    <div style=" padding: 7%; background-position: up;  background-image: url(imgarmas/dog2.jpg);">
      <div class=" col-lg-6 col"><h2 style="color:white">Nuestros productos</h2></div>
      <br>
      <br>
      <div class="col-5"><p style="color:white">Catálogo de armas y municiones
      Toda la gama de tiendas de armas en un único catálogo electrónico. Puedes reservar armas y municiones online, y luego pagarlas y recibirlas en una de nuestras armerías.
      Nuestras tiendas están ubicadas en 4 países del mundo: <b>Kazajistán(Nursultan,Almaty),España(Barcelona,Burgos,Alicante y Valencia),Estados Unidos(Orlando),Rusia(Moscú).</b>
      </p> <a style="color:white" href="productos.php" type="button">Conocer más</a></div>
     </div>
  </div>




<?php
    include "footer.php";
?>