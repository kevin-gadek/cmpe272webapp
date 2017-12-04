<?php
$db_host="localhost";
$db_user="adluusol_user";
$db_pw="users";
$db_name="adluusol_mydb";

$conn=new mysqli($db_host,$db_user,$db_pw,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>