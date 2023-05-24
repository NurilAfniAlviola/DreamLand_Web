<?php
include "koneksi.php";
$username = $_POST['username'];
$pass     = $_POST['pass'];

$repass = "UPDATE register set pass='$pass' where username='$username'";
$row=mysqli_query($koneksi, $repass);

if(mysqli_query($koneksi, $repass)){
    header('location: login.php');
}else{
    echo"Silahkan masukan password kembali";
}

?>