<?php


$host = "dairest.c0b6cqwyagui.us-east-2.rds.amazonaws.com:3306";
$user = "root";
$pass = "abcd1234";
$db = "dairest";

$conn = mysqli_connect($host, $user, $pass);
mysqli_select_db($conn,$db);
?>

