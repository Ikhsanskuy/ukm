<h2>Ubah Produk</h2>
<?php
include '../koneksi.php';
$ambil = $conn->query("SELECT * FROM news WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="10"> <?php echo $pecah['deskripsi']; ?></textarea>
    </div>
    <div class="form-group">
        <img src="../image/news/<?php echo $pecah['foto'] ?>">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>

    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    $nama      = ($_POST['nama']);
    $deskripsi      = ($_POST['deskripsi']);
    // jika foto diubah
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../image/news/$namafoto");

        // $conn->query("UPDATE produk SET nama_produk='$_POST[nama]',
        // 	harga_produk='$_POST[harga]', foto_produk='$namafoto', deskripsi_produk='$_POST[deskripsi]'
        // 	WHERE id_produk='$_GET[id]'");

        // $query = mysqli_query($conn, "UPDATE `produk` SET 
        // `nama_produk` = '$nama_produk',
        // `harga_produk` = '$harga_produk',
        // `foto_produk` = '$namafoto',
        // `deskripsi_produk` = '$deskripsi_produk'
        // WHERE `id_produk` = '$GET[id]'");

        $query = mysqli_query($conn, "UPDATE `news` SET 
		`nama` = '$nama', 
		`foto` = '$namafoto', 
		`deskripsi` = '$deskripsi'
		WHERE `id` = '$_GET[id]'");
    } else {
        // $conn->query("UPDATE produk SET nama_produk='$_POST[nama]',
        // 	harga_produk='$_POST[harga]',
        // 	deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");

        // $query = mysqli_query($conn, "UPDATE `produk` SET 
        // `nama_produk` = '$nama_produk',
        // `harga_produk` = '$harga_produk',
        // `foto_produk` = '$namafoto',
        // `deskripsi_produk` = '$deskripsi_produk'
        // WHERE `id_produk` = '$GET[id]'");

        $query = mysqli_query($conn, "UPDATE `news` SET 
		`nama` = '$nama', 
		`deskripsi` = '$deskripsi' 
		WHERE `id` = '$_GET[id]'");
    }



    if ($query) {
        echo "<script>alert('Produk Diubah'); </script>";
        echo "<script>location='dashboard.php?halaman=news'; </script>";
    } else {
        echo "<script>alert('Produk Gagal Diubah'); </script>";
        echo "<script>location='dashboard.php?halaman=news'; </script>";
        // header("location:./index.php");
    }
}

?>