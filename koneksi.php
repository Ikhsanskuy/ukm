<?php
// <--mac-->
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'penulisan_ilmiah';
$conn = mysqli_connect($host, $user, $pass, $db);

// <--windows-->
// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $db = 'penulisan_ilmiah';
// $conn = mysqli_connect($host, $user, $pass, $db);

if ($conn) {
}
mysqli_select_db($conn, $db);
