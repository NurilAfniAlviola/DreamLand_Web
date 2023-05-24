<?php
include "koneksi.php";
$username = $_POST['username'];
$pass     = $_POST['pass'];
$login = "SELECT * FROM register WHERE username = '$username' AND pass='$pass'";
$row=mysqli_query($koneksi, $login);

if (mysqli_num_rows ($row) > 0){
  header("Location: home.php");
}else{
  echo"password salah";
}
