<!DOCTYPE html>
<html>
<title>Venture Design</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Venture<br>Interior<br>Design</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Portfolio</a> 
    <a href="#news" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">News</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About</a> 
    <a href="#contacts" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contacts</a> 
    <a href="/login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Login</a> 
    <a href="/user.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">User</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
  <span>Venture Design</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="portfolio">
    <h1 class="w3-jumbo"><b>Interior Design</b></h1>
    <h1 class="w3-xxxlarge w3-text-blue"><b>Portfolio.</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="img/pic1.jpg" style="width:100%" onclick="onClick(this)" alt="Soft and sharp mood with natural light">
      <img src="img/pic2.jpg" style="width:100%" onclick="onClick(this)" alt="Modular and functional scandinavian design">
      <img src="img/pic3.jpg" style="width:100%" onclick="onClick(this)" alt="Cedar oak furnishings with abundance of natural light">
    </div>

    <div class="w3-half">
      <img src="img/pic4.jpg" style="width:100%" onclick="onClick(this)" alt="Tall windows for the living room">
      <img src="img/pic5.jpg" style="width:100%" onclick="onClick(this)" alt="Comtemporary entertainment">
      <img src="img/pic6.jpg" style="width:100%" onclick="onClick(this)" alt="Mahogany bloom">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="news" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-blue"><b>News.</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
    <p>Discount for first customers</p>
    <p>Announcing a 20% discount for brand new customers. Customer service is important blah blah blah, give me more money in the future.
    </p>
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="contacts" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-blue"><b>About.</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
    <p>The best team in the world.</p>
    <p>Totally a legitimate interior design company and not a project for a random software class.
    </p>
  </div>



  <!-- Packages / Pricing Tables -->
  
 
  <div class="w3-container" id="contacts" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-blue"><b>Contacts.</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
    <p>Contact us for a consultation</p>
  </div>
  
   

  <?php
		$contacts = fopen("contacts.txt", "r");
		while(!feof($contacts)){
			$line = fgets($contacts);
			echo "$line</br>";
			
		}
		fclose($contacts);
  ?>
  

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>