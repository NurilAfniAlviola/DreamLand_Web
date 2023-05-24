<?php
    include "koneksi.php";
    
    $username =$_POST["username"];
    $pass =$_POST["pass"];
    $pass2=$_POST['pass2'];
    $nama=$_POST["name"];
    $email=$_POST["email"];

    if ($pass==$pass2){
        $sql="INSERT INTO register (username, pass, nama, email)
            VALUES ('$username', '$pass', '$nama', '$email')";
        $a=$koneksi -> query ($sql);
            
        if ($a === true){
            header("location:index.php");
        }else{
             echo "Pendaftaran gagal : ".mysqli_error($koneksi);
        }

    }else{
        echo"pw tidak sama";
    }
