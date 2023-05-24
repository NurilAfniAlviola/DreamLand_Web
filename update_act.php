<?php 
	session_start();
	include "koneksi.php";
    error_reporting(E_ALL^(E_NOTICE|E_WARNING));
    if(!isset($_SESSION ['username'])){
        die("silahkan <a href = login.php>Login<a/>Terlebih Dahulu!");
    }
    $username = $_SESSION['username'];
    $pass     = $_SESSION['pass2'];
    $nama     = $_SESSION['name'];
    $email     =$_SESSION['email'];
    $query = "SELECT * FROM register WHERE username = '$username' AND pass='$pass'";

    if ($pass==$pass2){
        $update = "UPDATE register set pass='$pass', nama='$nama', email = '$email' 
        where username='$username'";
        $a=$koneksi -> query ($update);
            
        if ($a === true){
            header("location:profile.php");
        }else{
             echo "Update data gagal : ".mysqli_error($koneksi);
        }
    
    }else{
        echo"pw tidak sama";
    }
?>
