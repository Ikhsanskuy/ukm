<?php
include '../koneksi.php';
?>
<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea type="text" class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save'])) {
	$foto = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	$nama      = ($_POST['nama']);
	$deskripsi      = ($_POST['deskripsi']);
	move_uploaded_file($lokasi, "../image/news/" . $foto);
	// $conn->query("INSERT INTO produk
	// 		(nama_produk, harga_produk, foto_produk, deskripsi_produk)
	// 		VALUES('$_POST[nama]','$_POST[harga]','$nama','$_POST[deskripsi]')");
	$query = mysqli_query($conn, "INSERT INTO `news` (`nama`,`foto`,`deskripsi`) 
					VALUES ('$nama','$foto','$deskripsi')");


	if ($query) {
		echo "<div class='alert alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=dashboard.php?halaman=news'>";
	} else {
		header("location:dashboard.php?halaman=tambah");
		echo "<div class='alert alert-info'>Data Gagal tersimpan</div>";
	}
}
?>