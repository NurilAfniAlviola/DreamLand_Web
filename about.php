<?php 
	session_start();
	include "koneksi.php";
    error_reporting(E_ALL^(E_NOTICE|E_WARNING));
    if(isset($_SESSION ['username'])){
        die("silahkan <a href = login.php>Login<a/>Terlebih Dahulu!");
    }
    $username = $_SESSION ['username'];
    $pass = $_SESSION ['pass'];
    // $query = "SELECT * FROM register WHERE username = '$username' AND pass='$pass'"

    $sql = "SELECT username, pass, nama, email 
		FROM register";
		
    $query = mysqli_query($koneksi, $sql);

    $row = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <title>DreamLand Webshop</title>
  </head>
  
  <body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="home.php">
                <img src="gambar/logo.png" alt="" width="50" height="50" class="me-2">
                Dream<em>Land</em>
            </a>
            
            <!-- Search -->
            <!-- <form class="d-flex ms-auto my-4 my-lg-0">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-light" type="submit">Search</button>
            </form> -->
            <!-- end search -->
            
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- about start -->
    <div class="container-fluid py-2">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">About Us</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Pembelian Album</h4>
                    <h5 class="text-muted mb-3">Tersedia berbagai macam album dan merchendise dari Seventeen dan juga NCT Dream</h5>
                    <p>Kami Menyediakan pembelian semua jenis album dari seventeen dan juga nct dream.
                        Selain itu, kamu juga menyediakan pembelian merchendise pada website kami.
                        Setiap barang memiliki harga dan jumlah yang berbeda.
                    </p>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="gambar/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Pemesanan Tiket</h4>
                    <p>Pemesanan tiket terbaru dari seventeen dan nct dream bisa di dapatkan dengan mudah pada website kami.
                        Mulai dari tiket konser dan fanmeeting offline bisa di dapatkan dengan mudah.
                    </p>
                </div>
            </div> 
        </div>
    </div>
    <!-- about end -->

    <!-- footer start -->
    <footer class="bg-light p-3 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-md-start text-center ">
                    <a href="#" style="text-decoration-none">
                        <img src="gambar/logo.png" style="width: 40px;">
                    </a>
                    <span class="ps-1">Copyright @2022 | Created by Viola </span>
                </div>

                <div class="col-md-6 text-md-end text-center ">
                    <a href="https://web.facebook.com/nuril.alviola" style="text-decoration-none">
                        <img src="gambar/fb.jpeg" class="ms-2" style="width: 20px;">
                    </a>

                    <a href="https://www.instagram.com/vllaafn/?hl=en" style="text-decoration-none">
                        <img src="gambar/ig.png" class="ms-2" style="width: 30px;">
                    </a>

                    <a href="https://twitter.com/Vlanrfn" style="text-decoration-none">
                        <img src="gambar/twt.png" class="ms-2" style="width: 33px;">
                    </a>

                    <a href="https://www.youtube.com/channel/UC2saLUl3bcsQ62Xsd745zUws" style="text-decoration-none">
                        <img src="gambar/ytb.png" class="ms-2" style="width: 60px;">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>