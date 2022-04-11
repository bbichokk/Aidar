<form action="header.php" method="post">
  
<?php
    include "header.php";
    include "connectsql.php";
?>
<br>
<center>
  <h1><i>Nuestros productos</i></h1>
</center>
<br>



<ul class="nav justify-content-center" >
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="categorias.php">Categorias</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="productos.php">Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add_producto.php">Añadir </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="prod_modificar.php">Modificar </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="borrar_prod.php">Borrar </a>
  </li>
</ul>
<br>

<style>


img:hover{
    width: 200px;
   

-webkit-transition: width 1s;
-moz-transition: width 1s;
-o-transition: width 1s;
 transition: width 1s;
}

</style>

<div class="container-fluid" style="background-color:whitesmoke">
  <div class="px-lg-5">
    
  <div class="row">
      <!-- Cuchillos-->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/BARBUS.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="cuchillos.php" class="text-dark" id="barbus">BARBUS</a></h5>
            <div href="#" class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
          </div>                          
        </div>
      </div>
     

      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/FINLANDES.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="cuchillos.php" class="text-dark">FINLANDES</a></h5>
            <div href="#" class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
          </div>
        </div>
      </div>
     

      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/HORNBEK.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="cuchillos.php" class="text-dark">HORNBEK</a></h5>
            <div href="#" class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
          </div>
        </div>
      </div>
   

      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="IMGARMAS/STEALTH.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="cuchillos.php" class="text-dark">STEALTH</a></h5>
            <div href="#" class="badge badge-danger px-3 rounded-pill font-weight-normal">Top venta</div>
          </div>
        </div>
      </div>
      

      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="IMGARMAS/ZANDAK.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="cuchillos.php" class="text-dark">ZONDAK</a></h5>
          </div>
        </div>
      </div>
      <!-- End Cuchillos-->


    
      <!-- Pistolas-->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/Colt M1911A1.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="pistolas.php" class="text-dark">ColtM1911A1</a></h5>
          </div>
        </div>
      </div>
      

      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/Beretta 93R.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="pistolas.php" class="text-dark">Beretta 93R</a></h5>
          </div>
        </div>
      </div>
      

      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm "><img src="imgarmas/Astra A60.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="pistolas.php" class="text-dark">Astra A60</a></h5>
          </div>
        </div>
      </div>
     

      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="IMGARMAS/Revolver Smith & Wesson.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="pistolas.php" class="text-dark">Revolver Smith & Wesson</a></h5>
          </div>
        </div>
      </div>
     

      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="IMGARMAS/Remington XP-100.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="pistolas.php" class="text-dark">Remington XP-100</a></h5>
          </div>
        </div>
      </div>
    

         <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/Makarova.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="pistolas.php" class="text-dark">Makarova</a></h5>
          </div>
        </div>
      </div>
    

      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/APB.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="pistolas.php" class="text-dark">APB</a></h5>
          </div>
        </div>
      </div>
      

       <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/USP.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="pistolas.php" class="text-dark">USP</a></h5>
            <div href="#" class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
          </div>
        </div>
      </div>
      <!-- End Pistolas-->

  
      <!-- Automatas-->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/Saiga2.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="automatas.php" class="text-dark">Saiga</a></h5>
          </div>
        </div>
      </div>
      <!-- fin -->

      <!-- 2foto -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/Saiga12K.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="automatas.php" class="text-dark">Saiga-12K</a></h5>
          </div>
        </div>
      </div>
      <!-- fin -->

      <!-- 3foto -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/Ak47.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="automatas.php" class="text-dark">Ak47</a></h5>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- 4foto -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="IMGARMAS/Verp-12.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="automatas.php" class="text-dark">Vepr-12</a></h5>
          </div>
        </div>
      </div>
      <!-- End Automatas -->

     
      <!-- Rifles-->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/MP-27.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="rifles.php" class="text-dark">MP27P</a></h5>
            <div href="#" class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
          </div>
        </div>
      </div>
      <!-- fin -->

      <!-- 2foto -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/CZ Mallard.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="rifles.php" class="text-dark">CZ Mallard</a></h5>
          </div>
        </div>
      </div>
      <!-- fin -->

      <!-- 3foto -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/TK-598.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="rifles.php" class="text-dark">TK598</a></h5>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- 4foto -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="IMGARMAS/VPO-223.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="rifles.php" class="text-dark">VPO-223</a></h5>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- 5foto -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="IMGARMAS/VPO-208L.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="rifles.php" class="text-dark">VPO-208L</a></h5>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- 6foto -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/Beretta 486 Parallelo.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="rifles.php" class="text-dark">Beretta 486 Parallelo</a></h5>
            <div href="#" class="badge badge-danger px-3 rounded-pill font-weight-normal">Top venta</div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!--7 -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/Sauer Apollon.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="rifles.php" class="text-dark">Sauer Apollon</a></h5>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- 8-->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/Benelli Raffaello Сrio Сomfort.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="rifles.php" class="text-dark">Benelli Raffaello Crio Comfort</a></h5>
            <div href="#" class="badge badge-danger px-3 rounded-pill font-weight-normal">Top venta</div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- 9 -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/ATA Neo 12.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="rifles.php" class="text-dark">ATA Neo 12</a></h5>
          </div>
        </div>
      </div>
      <!-- End -->

      <!--10 -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/Hatsan H112.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="rifles.php" class="text-dark">Hatsan H112</a></h5>
          </div>
        </div>
      </div>
      <!-- End Rifles -->

      <dic class="row">
       <!-- 1 foto-->
       <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/Xpedition X Series .png" alt="" width="150px" height="300px">
          <div class="p-4">
            <h5> <a href="arma de arco.php" class="text-dark">Xpedition X30 Compound Bow</a></h5>
          </div>
        </div>
      </div>
      <!-- fin -->

      <!-- 2foto -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/Mathews Archery V3.jpga.jpg" alt=""  width="250px" height="300px">
          <div class="p-4">
            <h5> <a href="arma de arco.php" class="text-dark">Mathews Archery V3 Hunting Bow</a></h5>
          </div>
        </div>
      </div>
      <!-- fin -->

      <!-- 3foto -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imgarmas/Hoyt Ventum 33 Hunting Bow.png" alt=""  width="150px" height="300px">
          <div class="p-4">
            <h5> <a href="arma de arco.php" class="text-dark">Hoyt Ventum 33 Hunting Bow</a></h5>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- 4foto -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="IMGARMAS/Elite Enkore Compound Bow.png" alt=""  width="150px" height="300px">
          <div class="p-4">
            <h5> <a href="arma de arco.php" class="text-dark">Elite Enkore Compound Bow</a></h5>
          </div>
        </div>
      </div>

  </div>
</div>

