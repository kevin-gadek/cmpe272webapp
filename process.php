<?php
session_start();
$hostname = "localhost";
$username = "id3204915_admin";
$password = "password";
$db = "id3204915_db1";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//should do some safeguards against injection eventually
$username = $_POST["username"]; 
$password = $_POST["password"];

$query = "SELECT `username` AND `password` FROM `users` WHERE `username` = '$username' and password = '$password'";

 $result = $conn->query($query);
 if($result->num_rows > 0) {
     $message = "success";
     $_SESSION['nID'] = 1;
     header("Location: welcome.php?Message=" . urlencode($message));
       die();
    }else{
        $message = "fail";
        header("Location: login.php?Message=" . urlencode($message));
        die();
    }
    
    mysqli_close($conn);


?>