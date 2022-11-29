<?php
if (!isset($_SESSION)) {
	session_start();
}

include 'koneksi.php';


include "include/head.php";
include "include/header.php";

// $ambil = $conn->query("SELECT * FROM ukm WHERE id='$_GET[id]'");
$ambil = $conn->query("SELECT * FROM ukm");
$detail = $ambil->fetch_assoc();
?>

<!--ISI BODY SETELAH BANNER -->

<!--TESTING -->
<div class="carousel-item">
	<img src="image/ukm/<?php echo $detail['foto']; ?>" alt="...">
	<div class="carousel-caption d-none d-md-block">
		<h5><?= $detail['nama'] ?></h5>
		<p><?= $detail['deskripsi'] ?></p>
	</div>
</div>
<div class="whole-wrap" style="margin-top:35px">
	<div class="container">

		<div class="section-top-border">
			<h3 class="mb-30 title_color"></h3>
			<div class="row">
				<div class="col-md-3">
					<img src="image/ukm/<?php echo $detail['foto']; ?>" class="img-fluid img-thumbnail">
				</div>


				<div class="col-md-9 mt-sm-20 left-align-p">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<th>Nama Trip</th>
								<th>Sosial Media</th>
							</tr>
							<tr>
								<td><?= $detail['nama'] ?></td>
								<td>
									<?= $detail['ig'] ?>
									<?= $detail['twt'] ?>
								</td>
							</tr>
						</table>
					</div>

					<div class="table-responsive">
						<table class="table">
							<tr>
								<th>Deskripsi</th>
							</tr>
							<tr>
								<td><?= $detail['deskripsi'] ?></td>
							</tr>
						</table>
					</div>
					<a href="pemesanan.php?trip_id=" class="btn theme_btn button_hover">Pesan Sekarang</a>
					<div>

					</div>


				</div>
			</div>
		</div>


	</div>
</div>

<!--END TESTING -->


<!--END ISI BODY SETELAH BANNER -->


<?php

include "include/footer.php";


?>