<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Item</title>

    <!-- Bootstrap core CSS -->
    <link href="../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../public/css/shop-item.css" rel="stylesheet">

    <!-- ionic icons -->
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../public/tracker.php">Tracking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../public/register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../public/login.php">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">
            <h1 class="my-4">Spartan Shop</h1>
            <div class="list-group">

                <a href="index.php?company_id=1" class="list-group-item">Tutoring</a> <!-- Huy company id 1-->
                <a href="index.php?company_id=2" class="list-group-item">Gemstones</a>  <!-- andrew company id 2-->
                <a href="index.php?company_id=3" class="list-group-item">Interior Design</a> <!-- kevin company id 3-->
                <a href="index.php?company_id=4" class="list-group-item">Chinese Food Restaurant</a>  <!-- xuan company id 4-->
                <a href="index.php?company_id=5" class="list-group-item">Construction</a>  <!-- mangesh company id 5-->
            </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <!-- Dynamically display item -->
            <?php

            $index = $_GET['index'];
            $company_id = $_GET['company_id'];



            include '../hash_map_constants.php';
            include '../WebsiteConstants.php';



            switch ($company_id){
                case WebsiteConstants::$huy_company_id:
                    global $huy_items;
                    appendItem($huy_items[$index]);
                    break;
                case WebsiteConstants::$andrew_company_id:
					global $andrew_items;
                    appendItem($andrew_items[$index]);
                    break;
                case WebsiteConstants::$xuan_company_id:
					global $xuan_items;
                    appendItem($xuan_items[$index]);
                    break;
                case WebsiteConstants::$kevin_company_id:
					global $kevin_items;
                    appendItem($kevin_items[$index]);
                    break;
				case WebsiteConstants::$mangesh_company_id:
					global $mangesh_items;
                    appendItem($mangesh_items[$index]);
                    break;
                default:
                    echo "oops... Something went wrong";
            }


            function appendItem($item){

                $src = $item->getImageUrl();
                $content = $item->getDescription();
                $price = $item->getPrice();
                $title = $item->getTitle();


                echo "<div class=\"card mt-4\">";
                echo "<img class=\"card-img-top img-fluid\" src=$src alt=\"\">";
                echo "<div class=\"card-body\">";
                echo "<h3 class=\"card-title\">$title</h3>";
                echo "<h4>$price</h4>";
                echo "<p class=\"card-text\">$content</p>";
                echo "<span class=\"text-warning\">&#9733; &#9733; &#9733; &#9733; &#9734;</span>";
                echo "4.0 stars";
                echo "</div>";
                echo "</div>";
            }

            ?>


            <!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Product Reviews
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                    <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                    <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                    <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                    <hr>
                    <div class="form">
					<textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Please enter your review here...">
					</textarea>
                        <br>
                        <form class="review-form" id="review-form">
                            <div class="x-star-rating">
                                <div class="star full"></div>
                                <div class="star full"></div>
                                <div class="star full"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                            </div>
                            <button>submit</button>
                        </form>

                    </div> <!-- end form -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col-lg-9 -->

        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Spartan Shop 2017</p>
        </div>
        <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="../../public/vendor/jquery/jquery.min.js"></script>
    <script src="../../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
