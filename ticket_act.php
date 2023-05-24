<?php
include "koneksi.php";

$NIK = $_POST["NIK"];
$username = $_POST["username"];
$artis = $_POST['artis'];
$nama_tiket = $_POST["nama_tiket"];
$section = $_POST["section"];
$jumlah_pesan = $_POST["jumlah_pesan"];
$metode_bayar = $_POST["metode_bayar"];


$sql = "INSERT INTO tiket (NIK, username, artis, nama_tiket, section, jumlah_pesan, metode_bayar)
    VALUES ('$NIK', '$username', '$artis', '$nama_tiket', '$section', '$jumlah_pesan', '$metode_bayar')";
$a = $koneksi->query($sql);

if ($a === true) {
    echo "<script>alert('Pemesanan Berhasil');
        window.location.href = ('home.php');</script>";
} else {
    echo "Pendaftaran gagal : " . mysqli_error($koneksi);
}
