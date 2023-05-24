<?php
session_start();
include "koneksi.php";
  error_reporting(E_ALL^(E_NOTICE|E_WARNING));
  if(!isset($_SESSION ['username'])){
      die("silahkan <a href = login.php>Login<a/>Terlebih Dahulu!");
  }

  $username = $_SESSION ['username'];
    $pass = $_SESSION ['pass'];

// sql to delete a record
$sql = "DELETE FROM register WHERE username='$username'";

if ($koneksi->query($sql) === TRUE) {
  header("location:login.php");
} else {
  echo "Error deleting record: " . $koneksi->error;
}

$koneksi->close();
?>