<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'penulisan_ilmiah';
$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn) {
}
mysqli_select_db($conn, $db);
