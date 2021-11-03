<?php
    //koneksi Database
    $server= "localhost";
    $user= "root";
    $pass= "";
    $database= "dbproduk";

    $koneksi= mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));




    ?>



<!doctype html>
<html lang="en">
  <head>
    <style>
      body {height: 60vmax; background: linear-gradient(180deg, #6AC9C9 0%, #43E7FE 100%);}
      
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="posting.css">
    <title>Posting</title>
</head>
  <body>
    <div class="container">
        <div class="mt-3">
          <a href="home-page.html" class="btn btn" role="button"><i class="bi bi-arrow-left"></i><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"></i></a>
          <a href="home-page.html" class="btn btn" role="button"><i class="bi bi-arrow-right"></i><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"></i></a>
              </div>
        <h2 class="text-center">Postingan</h2>
  </nav>
  
  <!-- As a heading -->
    <div class="container-fluid">
    </div>
  <div class="card m-2">
    <h6 class="text-center mt-5">FOTO DARI ALBUM/FOTO</h6>
    <div class="card-body"></div>
  </div>
 <!-- As a heading -->
 <div class="container-fluid">
</div>
<div class="card-body">
<div class="row">
  <div class="col-6 text-center">
    <a href=""><img src="makanan.jpeg" width="100" height="100">
    <p style="font-size: 10px;">FOTO DARI ALBUM/FOTO</p></a>
  </div>
  <div class="col-6 text-center">
    <a href=""><img src="makanan.jpeg" width="100" height="100">
    <p style="font-size: 10px;">FOTO DARI ALBUM/FOTO</p></a>
  </div>
  <div class="col-6 text-center mt-4">
    <a href=""><img src="makanan.jpeg" width="100" height="100">
    <p style="font-size: 10px;">FOTO DARI ALBUM/FOTO</p></a>
  </div>
  <div class="col-6 text-center mt-4">
    <a href=""><img src="makanan.jpeg" width="100" height="100">
    <p style="font-size: 10px;">FOTO DARI ALBUM/FOTO</p></a>
  </div>
</div>
</div>
      <hr>
      <div class="d-flex justify-content-around">
        <a href=".html" class="btn btn" role="button"><i class="bi bi-image"></i><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"></i></a>
          <a href=".html" class="btn btn" role="button"><i class="bi bi-camera-fill"></i><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"></i></a>
      </div>
  </body>
</html>