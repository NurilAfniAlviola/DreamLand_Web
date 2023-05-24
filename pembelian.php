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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Form Detail Pembelian
                        </h4>
                    </div>
                    <div class="card-body ">
                        <form name="form" method="post" action="pembelian_act.php">
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="nomor">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="text" class="form-control" name="jumlah">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Metode Pembayaran</label>
                                <select class="form-select" aria-label="Default select example" name="pembayaran">
                                    <option selected disabled>-----Pilih-----</option>
                                    <option>BCA</option>
                                    <option>PAYPAL</option>
                                    <option>MANDIRI</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-warning float-end">Save</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>