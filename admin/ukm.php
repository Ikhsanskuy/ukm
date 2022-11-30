<h2>Data UKM</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Sosial Media</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $conn->query("SELECT * FROM ukm"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama']; ?></td>
                <td><?php echo $pecah['deskukm']; ?></td>
                <td>
                    <img src="../image/ukm/<?php echo $pecah['foto']; ?>" width="50" height="50" onclick="window.open('../image/ukm/<?= $pecah['foto']; ?>', '_blank');">
                    <img src="../image/ukm/<?php echo $pecah['foto1']; ?>" width="50" height="50" onclick="window.open('../image/ukm/<?= $pecah['foto']; ?>', '_blank');">
                    <img src="../image/ukm/<?php echo $pecah['foto2']; ?>" width="50" height="50" onclick="window.open('../image/ukm/<?= $pecah['foto']; ?>', '_blank');">
                </td>
                <td>
                    <a href="<?= $pecah['ig']; ?>" target="_blank"><i class="fa fa-instagram fa-2x"></i></a> |
                    <a href="<?= $pecah['twt']; ?>" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                </td>
                <td>
                    <a href="dashboard.php?halaman=ukmubah&id=<?php echo $pecah['id']; ?>" class="btn btn-warning">Ubah</a>
                </td>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>