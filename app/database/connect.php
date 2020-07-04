<?php 

$host ='localhost';
$user = 'root';
$pass= '';
$db_name = 'blog';


$con =  mysqli_connect($host, $user, $pass, $db_name);


if ($con->connect_error){
    die('Database connection error: ' . $conn->connect_error);
}


?>