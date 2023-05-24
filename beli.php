<?php
session_start();
include "koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if (isset($_SESSION['username'])) {
    die("silahkan <a href = login.php>Login<a/>Terlebih Dahulu!");
}
$username = $_SESSION['username'];
$pass = $_SESSION['pass'];
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
            <a class="navbar-brand" href="#">
                <img src="gambar/logo.png" alt="" width="50" height="50" class="me-2">
                Dream<em>Land</em>
            </a>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
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

    <!-- category idol -->
    <div class="container mt-3">
        <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px;">
            <h3 class="text-center">CHOOSE YOUR IDOL</h3>
        </div>
        <div class="row text-center row-container mt-2">
            <div class="col-lg-6 col-md-7 col-sm-10 col-10">
                <div class="jenis-transaksi">
                    <a href="beli_17.php"><img src="gambar/albumsvt.jpg" class="img-transaksi mt-3"></a>
                    <p class="mt-2">SEVENTEEN</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-7 col-sm-10 col-10">
                <div class="jenis-transaksi">
                    <a href="beli_dr.php"><img src="gambar/album1.jpg" class="img-transaksi mt-3"></a>
                    <p class="mt-2">NCT DREAM</p>
                </div>
            </div>
        </div>
    </div>
    <!-- category idol -->

    <div class="container my-3">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2 pb-2">
                <div class="card text-center">
                    <img src="gambar/bibo.jfif" class="card-img-top" alt="...">
                    <div class="card-body mt-2">
                        <h6 class="card-title">BeatBox - NCT Dream</h6>
                        <p class="card-text my-3 mb-10">Rp. 245.000</p>
                        <a href="pembelian.php" class="btn btn-dark d-grid ">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="gambar/tcA.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">NCT Dream Trading card A Glimo</h6>
                        <p class="card-text mt-2">Rp. 90.000</p>
                        <a href="pembelian.php" class="btn btn-dark d-grid">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="gambar/fts.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Face The Sun - Seventeen</h6>
                        <p class="card-text mt-2">Rp. 315.000</p>
                        <a href="produk/svt_fts.php" class="btn btn-dark d-grid">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="gambar/lenti.jfif" class="card-img-top" alt="...">
                    <div class="card-body mt-3">
                        <h6 class="card-title">NCT Dream Lenti 3D</h6>
                        <p class="card-text mt-2">Rp. 145.000</p>
                        <a href="pembelian.php" class="btn btn-dark d-grid">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="gambar/attacca.jfif" class="card-img-top" alt="...">
                    <div class="card-body mt-4">
                        <h6 class="card-title">Attacca - Seventeen</h6>
                        <p class="card-text mt-10">Rp. 285.000</p>
                        <a href="pembelian.php" class="btn btn-dark d-grid">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="gambar/binder1.jfif" class="card-img-top" alt="...">
                    <div class="card-body mt-2">
                        <h6 class="card-title">Seventeen - Binder Caratland</h6>
                        <p class="card-text mt-1">Rp. 215.000</p>
                        <a href="pembelian.php" class="btn btn-dark d-grid">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="gambar/bp_mg.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">BirthPack Mingyu</h6>
                        <p class="card-text mt-2">Rp. 519.000</p>
                        <a href="pembelian.php" class="btn btn-dark d-grid">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="gambar/epoxy.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">NCT Dream Epoxy</h6>
                        <p class="card-text mt-2">Rp. 195.000</p>
                        <a href="pembelian.php" class="btn btn-dark d-grid">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="gambar/glimo.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Glitch Mode - NCT Dream</h6>
                        <p class="card-text mt-2">Rp. 255.000</p>
                        <a href="pembelian.php" class="btn btn-dark d-grid">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="gambar/hf1.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Hello Future - NCT Dream</h6>
                        <p class="card-text mt-2">Rp. 235.000</p>
                        <a href="pembelian.php" class="btn btn-dark d-grid">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="gambar/hgr.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Henggarae - Seventeen</h6>
                        <p class="card-text mt-2">Rp. 225.000</p>
                        <a href="pembelian.php" class="btn btn-dark d-grid">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="gambar/hs.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Hot Sauce - NCT Dream</h6>
                        <p class="card-text mt-2">Rp. 275.000</p>
                        <a href="pembelian.php" class="btn btn-dark d-grid">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="gambar/minibag.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">NCT Dream Minibag</h6>
                        <p class="card-text mt-2">Rp. 250.000</p>
                        <a href="pembelian.php" class="btn btn-dark d-grid">Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer start -->
    <footer class="bg-light p-3 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-md-start text-center ">
                    <a href="pembelian.php" style="text-decoration-none">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>