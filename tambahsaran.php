<?php
$koneksi = mysqli_connect("localhost","root","","penulisan_ilmiah");


//Masukan data pesan

// Check connection
if (mysqli_connect_errno()){
 echo "Koneksi database gagal : " . mysqli_connect_error();
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$data = "INSERT INTO kontak VALUES('','$nama', '$email', '$pesan')";

mysqli_query($koneksi, $data);
header("Location: kontak.php");
?>