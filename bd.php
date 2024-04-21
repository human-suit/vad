<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'yks_bd';
$conn = mysqli_connect($servername, $username, $password, $dbname);
// $conn = new PDO("mysql:host=$servername; dbname=yks_bd", $username, $password);
if ($conn == false) {
    echo "Connection failed: ";
}



?>