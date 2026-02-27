<?php
$host = "localhost";
$user = "root";
$pass = "123456";
$db = "project";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    die("connection_faile".$conn->connect_error);
}
// echo 'connect successfuliy';
?>