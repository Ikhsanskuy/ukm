<h2>Data Berita</h2>
<a href="dashboard.php?halaman=tambah" class="btn btn-primary">Tambah Data</a> <br><br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $conn->query("SELECT * FROM news"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama']; ?></td>
                <td><?php echo $pecah['deskripsi']; ?></td>
                <td>
                    <img src="../image/news/<?php echo $pecah['foto']; ?>" width="200">
                </td>
                <td>
                    <a href="dashboard.php?halaman=ubah&id=<?php echo $pecah['id']; ?>" class="btn btn-warning">Ubah</a>
                    <a href="dashboard.php?halaman=hapus&id=<?php echo $pecah['id']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>