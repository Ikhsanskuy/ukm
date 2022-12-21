<?php $ambil=$conn->query("SELECT * FROM `login`"); ?>
<?php while($pecah=$ambil->fetch_assoc() ) { ?>

<p> 
	<h2 style="padding-bottom: 40px;"></h2>
	<h2 style="font-size: 80px; text-align: center;"> Selamat Datang <?php echo $pecah ['username']; ?></h2>
</p>

<?php } ?>