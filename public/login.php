<?php
session_start();
include '../src/Database.php';
include '../settings.php';
include '../src/models/User.php';

$db = new Database($settings);
$pdo = $db->getPDO();
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Spartan Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-login.css" rel="stylesheet">

</head>

<body style="height:100%">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tracker.php">Tracking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Log In
                        <span class="sr-only">(current)</span>
                    </a>

                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="login-page">
    <div class="form">
        <form class="login-form" action="login.php?process" method="post">
            <input name="email" id="email" type="text" placeholder="email"/>
            <input name="password" id="password" type="password" placeholder="password"/>
            <button>login</button>
        </form>
    </div>
</div>

<?php
if(isset($_GET['process'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    User::login($pdo, $email, $password);
    if(isset($_SESSION["user_id"])){
        //success
        if (headers_sent()) {
            die("Success. <p><a href=/>Back to Home</a></p>");
        }else{
            exit(header("Location: /"));
        }
    }
}

?>
?>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark" style="position:absolute; bottom:0; width:100%">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Spartan Shop 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
