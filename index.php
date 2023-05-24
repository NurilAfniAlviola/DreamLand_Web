<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylelogin.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,200&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>Login</title>
</head>

<body>
    <div class="overlay"></div>
    <form action="login_act.php" method="post" class="box">
        <div class="header">
            <h4> Login To Your Account</h4>
            <p> Nikmati kemudahan dengan website DreamLand</p>
        </div>
        <div class="login-area">
            <input type="text" class="username" placeholder="Username" name="username">
            <input type="password" class="pass" placeholder="Password" name="pass">
            <input type="submit" value="Login" class="submit">
            <a href="repass.php">Forgot Passsword</a>
            <a href="register.php">Register</a>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>