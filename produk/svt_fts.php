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
    <link rel="stylesheet" type="text/css" href="../css/produk.css">

    <title>DreamLand Webshop</title>
  </head>

  <body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="../home.php">
                <img src="../gambar/logo.png" alt="" width="50" height="50" class="me-2">
                Dream<em>Land</em>
            </a>
            
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" href="../home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../about.php">About</a>
                </li>
                <a class="nav-link" href="../contact.php">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../profile.php">Profile</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- Single Produk -->
    <div class="container">
        <div class="row row-produk mt-3">
            <div class="col-lg-5">
            <figure class="figure">
                <img src="../gambar/fts.jfif" class="figure-img img-fluid rounded"
                style="border-radius: 5px; width: 450px">
                <figcaption class="figure-caption d-flex justify-content-evenly">
                    <a href="">
                        <img src="../gambar/fts.jfif" class="figure-img img-fluid rounded"
                        style="border-radius: 5px; width: 70px">
                    </a>
                </figcaption>
            </figure>
            </div>
            
            <div class="col-lg-7">
                <h4>Face The Sun - Seventeen</h4>
                <div class="garis-nama"></div>
                <h3 class="text-muted mb-3">Rp. 315.000 </h3>

                <h4 class="text-center mb-2">Detail Transaction</h4>

                <div class="form-beli mt-3">
                    <form>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Versi</legend>
                            <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                Control
                                <span class="mx-2" style="font-size: 12px;">Tersisa 25 buah</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios2">
                                Shadow
                                <span class="mx-2" style="font-size: 12px;">Tersisa 25 buah</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios3">
                                Ray
                                <span class="mx-2" style="font-size: 12px;">Tersisa 25 buah</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios4">
                                Path
                                <span class="mx-2" style="font-size: 12px;">Tersisa 25 buah</span>
                                </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                                <label class="form-check-label" for="gridRadios5">
                                Pioner
                                <span class="mx-2" style="font-size: 12px;">Tersisa 25 buah</span>
                                </label>
                            </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <label for="inputjumlah3" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputjumlah">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Metode Pembayaran</label>
                            <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">Dana</option>
                                <option value="2">BNI</option>
                                <option value="3">BCA</option>
                                <option value="3">Paypal</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark">PAY</button>
                    </form>
                </div>

        </div>
    </div>
    <!-- Single Produk end-->

    <!-- footer start -->
    <footer class="bg-light p-3 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-md-start text-center ">
                    <a href="#" style="text-decoration-none">
                        <img src="../gambar/logo.png" style="width: 40px;">
                    </a>
                    <span class="ps-1">Copyright @2022 | Created by Viola </span>
                </div>

                <div class="col-md-6 text-md-end text-center ">
                    <a href="https://web.facebook.com/nuril.alviola" style="text-decoration-none">
                        <img src="../gambar/fb.jpeg" class="ms-2" style="width: 20px;">
                    </a>

                    <a href="https://www.instagram.com/vllaafn/?hl=en" style="text-decoration-none">
                        <img src="../gambar/ig.png" class="ms-2" style="width: 30px;">
                    </a>

                    <a href="https://twitter.com/Vlanrfn" style="text-decoration-none">
                        <img src="../gambar/twt.png" class="ms-2" style="width: 33px;">
                    </a>

                    <a href="https://www.youtube.com/channel/UC2saLUl3bcsQ62Xsd745zUws" style="text-decoration-none">
                        <img src="../gambar/ytb.png" class="ms-2" style="width: 60px;">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>