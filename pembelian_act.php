<?php
include "koneksi.php";

$nama = $_POST["nama"];
$nomor = $_POST['nomor'];
$alamat = $_POST["alamat"];
$jumlah = $_POST["jumlah"];
$pembayaran = $_POST["pembayaran"];


$sql = "INSERT INTO pembelian_barang (nama, nomor, alamat, jumlah, pembayaran)
    VALUES ('$nama', '$nomor', '$alamat', '$jumlah', '$pembayaran')";
$a = $koneksi->query($sql);

if ($a === true) {
    echo "<script>alert('Pemesanan Berhasil');
        window.location.href = ('home.php');</script>";
} else {
    echo "<script>alert('Pemesanan Gagal');
        window.location.href = ('beli.php');</script>";
}
