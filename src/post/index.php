<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Spartan Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../public/css/shop-homepage.css" rel="stylesheet">

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
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
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
		  <h3>Filter By: </h3>
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
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Company 1">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Company 2">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Company 3">
              </div>
			  <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Company 4">
              </div>
			  <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Company 5">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


            <!--Display items here -->
            <!-- http://huyvanvo94.com/service.html -->
          <div class="row">

              <?php

              include '../hash_map_constants.php';
              include '../WebsiteConstants.php';


              $company_id = $_GET['company_id'];


			  
              switch ($company_id){
                  case WebsiteConstants::$huy_company_id:
                      global $huy_items;
                      appendItems($huy_items, $company_id);
                      break;
                  case WebsiteConstants::$andrew_company_id:
					  global $andrew_items;
                      appendItems($andrew_items, $company_id);
                      break;
                  case WebsiteConstants::$xuan_company_id:
					  global $xuan_items;
                      appendItems($xuan_items, $company_id);
                      break;
                  case WebsiteConstants::$kevin_company_id:
					  global $kevin_items;
                      appendItems($kevin_items, $company_id);
                      break;
				  case WebsiteConstants::$mangesh_company_id:
					  global $mangesh_items;
                      appendItems($mangesh_items, $company_id);
                      break;
                  default:
                      echo "Error";
              }


              function appendItems($items, $company_id)
              {

                  $length = count($items);


                  for ($i = 1; $i <= $length; $i++) {

                      echo "<div class=\"col-lg-4 col-md-6 mb-4\">";
                      echo "<div class=\"card h-100\">";


                      $item = $items[$i];

                      $src = $item->getImageUrl();
                      $content = $item->getDescription();
                      $price = $item->getPrice();
                      $title = $item->getTitle();


                      echo "<img class=\"card-img-top\" src=$src>";

                      echo "<div class=\"card-body\">";
                      echo "<h4 class=\"card-title\">";
                      echo "<a href=\"../../src/post/item.php?company_id=$company_id&index=$i\">$title</a>";
                      echo "</h4>";
                      echo "<h5>$price</h5>";
                      echo "<p class=\"card-text\">$content</p>";
                      echo "</div>";
                      echo "<div class=\"card-footer\">";
                      echo "<small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>";
                      echo "</div>";
                      echo "</div>";
                      echo "</div>";
                  }

              }

              ?>


          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

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