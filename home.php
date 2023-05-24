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
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <title>DreamLand Webshop</title>
</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="gambar/logo.png" alt="" width="50" height="50" class="me-2">
                Dream<em>Land</em>
            </a>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
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

    <!-- carousel start -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="gambar/dream.jfif" class="d-block img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>NCT DREAM</h5>
                    <p>New Comeback Era BeatBox Out Now</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="gambar/17.jfif" class="d-block img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>SEVENTEEN</h5>
                    <p>New Era with New Ring, 4th Full Album Face The sun with Title track Hot out now</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel end -->

    <!-- category start -->
    <div class="container mt-5">
        <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px;">
            <h3 class="text-center">CHOOSE YOUR TRANSACTION</h3>
        </div>
        <div class="row text-center row-container mt-2">
            <div class="col-lg-6 col-md-7 col-sm-10 col-10">
                <div class="jenis-transaksi">
                    <a href="beli.php"><img src="gambar/album1.jpg" class="img-transaksi mt-3"></a>
                    <p class="mt-2">PEMBELIAN ALBUM/MD</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-7 col-sm-10 col-10">
                <div class="jenis-transaksi">
                    <a href="tiket.php"><img src="gambar/tiket.jpg" class="img-transaksi mt-3"></a>
                    <p class="mt-2">PEMESANAN TIKET</p>
                </div>
            </div>
        </div>
    </div>
    <!-- category end -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>