<h2>Ubah Produk</h2>
<?php
include '../koneksi.php';
$ambil = $conn->query("SELECT * FROM ukm WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>" disabled>
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="10"> <?php echo $pecah['deskripsi']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Sosial media</label>
        <h6>Instagram | ex : (https://www.instagram.com/cristiano)</h6>
        <input type="text" class="form-control" name="ig" value="<?php echo $pecah['ig']; ?>">
        <h6>Twitter | ex : (https://twitter.com/cristiano)</h6>
        <input type="text" class="form-control" name="twt" value="<?php echo $pecah['twt']; ?>">
    </div>
    <div class="form-group">
        <img src="../image/ukm/<?php echo $pecah['foto'] ?>">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" class="form-control" name="foto" multiple>
    </div>

    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    $nama      = ($_POST['nama']);
    $deskripsi      = ($_POST['deskripsi']);
    $twt      = ($_POST['twt']);
    $ig      = ($_POST['ig']);
    // jika foto diubah
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../image/ukm/$namafoto");


        $query = mysqli_query($conn, "UPDATE `ukm` SET 
		`foto` = '$namafoto', 
		`deskripsi` = '$deskripsi',
        `ig` = '$ig',
        `twt` = '$twt'
		WHERE `id` = '$_GET[id]'");
    } else {

        $query = mysqli_query($conn, "UPDATE `ukm` SET 
		`deskripsi` = '$deskripsi',
        `ig` = '$ig',
        `twt` = '$twt'
		WHERE `id` = '$_GET[id]'");
    }



    if ($query) {
        echo "<script>alert('Data berhasil diupdate'); </script>";
        echo "<script>location='dashboard.php?halaman=ukm'; </script>";
    } else {
        echo "<script>alert('Data gagal diupdate'); </script>";
        echo "<script>location='dashboard.php?halaman=ukm'; </script>";
        // header("location:./index.php");
    }
}

?>