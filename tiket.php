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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">

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
                        <a class="nav-link" href="help.php">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <section>
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Book A Ticket</h6>
                            </div>
                            <div class="card-body">
                                <form name="form" method="post" action="ticket_act.php">
                                    <div class="mb-3">
                                        <label class="form-label">NIK</label>
                                        <input type="number" class="form-control" name="NIK">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Grup</label>
                                        <select class="form-select" aria-label="Default select example" name="artis">
                                            <option selected>Pilih</option>
                                            <option value="tds">NCT Dream</option>
                                            <option value="bts">SEVENTEEN</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Konser</label>
                                        <select class="form-select" aria-label="Default select example" name="nama_tiket">
                                            <option selected>Jenis tiket</option>
                                            <option value="tds">The Dream Show 2</option>
                                            <option value="bts">Be The Sun</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Section Vanue</label>
                                        <select class="form-select" aria-label="Default select example" name="section">
                                            <option selected>Pilih</option>
                                            <option value="CAT1A">CAT 1A</option>
                                            <option value="CAT1B">CAT 1B</option>
                                            <option value="CAT2A">CAT 2A</option>
                                            <option value="CAT2B">CAT 28</option>
                                            <option value="CAT3A">CAT 3A</option>
                                            <option value="CAT3B">CAT 3B</option>
                                            <option value="CAT3C">CAT 3C</option>
                                            <option value="CAT3D">CAT 3D</option>
                                            <option value="CAT4A">CAT 4A</option>
                                            <option value="CAT4B">CAT 4B</option>
                                            <option value="CAT4C">CAT 4C</option>
                                            <option value="CAT4D">CAT 4D</option>
                                            <option value="CAT5">CAT 5</option>
                                            <option value="CAT6">CAT 6</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Jumlah</label>
                                        <input type="number" class="form-control" name="jumlah_pesan">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Metode Pembayaran</label>
                                        <select class="form-select" aria-label="Default select example" name="metode_bayar">
                                            <option selected disabled>-----Pilih-----</option>
                                            <option>BCA</option>
                                            <option>PAYPAL</option>
                                            <option>MANDIRI</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-warning">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-primary">Ticket Pricelist</h6>
                            </a>
                            <div class="collapse show" id="collapseCardExample">
                                <div class="card-body">
                                    CAT 1A : 3.759.000 <br>
                                    CAT 1B : 3.759.000 <br>
                                    CAT 2A : 3.237.000 <br>
                                    CAT 2B : 3.237.000 <br>
                                    CAT 3A : 2.825.000 <br>
                                    CAT 3B : 2.825.000 <br>
                                    CAT 3C : 2.825.000 <br>
                                    CAT 3D : 2.825.000 <br>
                                    CAT 4A : 2.476.000 <br>
                                    CAT 4B : 2.476.000 <br>
                                    CAT 4C : 2.476.000 <br>
                                    CAT 4D : 2.476.000 <br>
                                    CAT 5 : 1.832.000 <br>
                                    CAT 6 : 1.573.000 <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>