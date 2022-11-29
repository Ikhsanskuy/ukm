<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UKM Universitas Gunadarma</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <style>
    .banner-image {
      background-image: url('img/ukm3.jpg');
      background-size: cover;
    }
  </style>
</head>

<body>
  <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
      <a class="navbar-brand" href="#">Universitas Gunadarma</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="ukm.php">UKM</a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="kontak.php">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="login.php">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Banner Image  -->
  <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
      <h1 class="text-white">Unit Kegiatan Mahasiswa</h1>
      <p class="text-white">Coloring the Global Future</p>
    </div>
  </div>

  <!-- Isi about -->

  <div class="container my-5 d-grid gap-5">
    <div class="row">
      <div class="col peding-100">
        <h1>Kontak Saran</h1>
        <p>
          Silahkan berikan saran anda pada kolom yang sudah tersedia.
        </p>
      </div>

      <div class="col peding-30">
        <form method="post" action="tambahsaran.php">

          <div class="form-group">
            <label for="">Nama Anda:</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
          </div>
          <br>
          <div class="form-group">
            <label for="">E-mail Anda:</label>
            <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
          </div>
          <br>
          <div class="form-group">
            <label for="">Saran Anda:</label>
            <textarea name="pesan" class="form-control" cols="30" rows="7" placeholder="Masukkan Saran Anda"></textarea>
          </div>
          <br>
          <input onclick="simpan()" class="btn btn-primary" type="submit" value="Kirim" name="kirim">

        </form>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <br>
  <br>

  <!-- footer -->
  <div class="card text-center bg-dark">
    <div class="card-body">
      <p class="card-text text-white">Copyright &copy; 2022 - Zidan Walid Murtadho, All Rights
        Reserved.</p>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    var nav = document.querySelector('nav');
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
      } else {
        nav.classList.remove('bg-dark', 'shadow');
      }
    });
  </script>
  <script>
    function simpan() {
      alert("Terima Kasih atas Saran Anda");
    }
  </script>
</body>
</html>