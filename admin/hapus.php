<?php

$ambil = $conn->query("SELECT * FROM news WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['foto'];
if (file_exists("../image/news/$fotoproduk")) {
    unlink("../image/news/$fotoproduk");
}

$conn->query("DELETE FROM news WHERE id='$_GET[id]'");

echo "<script>alert('Produk Terhapus'); </script>";
echo "<script>location='dashboard.php?halaman=news';</script>";
