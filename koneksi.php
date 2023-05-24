<html>

<head>
    <title>Koneksi Database</title>
</head>

<body>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_toko";
    $port = "3308";
    $koneksi = mysqli_connect($host, $username, $password, $database, $port);
    if ($koneksi) {
        echo "";
    } else {
        echo "Server not connected";
    }
    ?>
</body>

</html>