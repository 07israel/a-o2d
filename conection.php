<?php

$host ="localhost";
$user = "root";
$pass = "";
$database = "site-n";


$con = mysqli_connect($host, $user, $pass) or die (mysqli_conect_error());
mysqli_select_db($con,$database);
?>










