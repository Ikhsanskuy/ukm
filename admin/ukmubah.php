<h2>Ubah Data</h2>
<?php
include '../koneksi.php';
$ambil = $conn->query("SELECT * FROM ukm WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama UKM</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>" disabled>
    </div>
    <div class="form-group">
        <label>Deskripsi UKM</label>
        <textarea class="form-control" name="deskripsi" rows="10"> <?php echo $pecah['deskripsi']; ?></textarea>
    </div>
    <label>Informasi Kegiatan</label>
    <div class="row">

        <!-- div 2 -->
        <div class="middle col-md-4 col-md-push-4 col-sm-4">
            <div class="form-group">
                <img src="../image/ukm/<?php echo $pecah['foto1'] ?> " width="300">
            </div>
            <div class="form-group">
                <label>Foto Kegiatan 2</label>
                <input type="file" class="form-control-img" name="foto1" multiple>
            </div>
            <div class="form-group">
                <label>Deskripsi Kegiatan 2</label>
                <textarea class="form-control-img" name="deskripsi" rows="10"> <?php echo $pecah['deskripsi1']; ?></textarea>
            </div>
        </div>

        <!-- div 1 -->
        <div class="first col-md-4 col-sm-4 col-md-pull-4 ">
            <div class="form-group">
                <img src="../image/ukm/<?php echo $pecah['foto'] ?> " width="300">
            </div>
            <div class="form-group">
                <label>Foto Kegiatan 1</label>
                <input type="file" class="form-control-img" name="foto" multiple>
            </div>
            <div class="form-group">
                <label>Deskripsi Kegiatan 1</label>
                <textarea class="form-control-img" name="deskripsi" rows="10"> <?php echo $pecah['deskripsi']; ?></textarea>
            </div>
        </div>

        <!-- div 3 -->
        <div class="last col-md-4 col-sm-4">
            <div class="form-group">
                <img src="../image/ukm/<?php echo $pecah['foto2'] ?> " width="300">
            </div>
            <div class="form-group">
                <label>Foto Kegiatan 3</label>
                <input type="file" class="form-control-img" name="foto2" multiple>
            </div>
            <div class="form-group">
                <label>Deskripsi Kegiatan 3</label>
                <textarea class="form-control-img" name="deskripsi" rows="10"> <?php echo $pecah['deskripsi2']; ?></textarea>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Sosial media</label>
        <h6>Instagram | ex : (https://www.instagram.com/cristiano)</h6>
        <input type="text" class="form-control" name="ig" value="<?php echo $pecah['ig']; ?>">
        <h6>Twitter | ex : (https://twitter.com/cristiano)</h6>
        <input type="text" class="form-control" name="twt" value="<?php echo $pecah['twt']; ?>">
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