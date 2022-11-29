<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UKM Universitas Gunadarma</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
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

  <!-- Isi ukm -->
  <div class="card-group mt-5">
    <div class="card" style="width: 18rem;">
      <img style="height:500px;" src="img/ukmi.jpeg" class="center" alt="...">
      <div class="card-body">
        <h5 class="card-title">UKM Kerohanian Islam (UKM Rohis)</h5>
        <a href="ukm1.php" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img style="height: 500px;" src="img/rohkris.jpg" class="center" alt="...">
      <div class="card-body">
        <h5 class="card-title">UKM Kerohanian Kristen (UKM Rohkris)</h5>
        <a href="ukm2.php" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
  <div class="card-group mt-5">
    <div class="card" style="width: 18rem;">
      <img style="height: 500px;" src="img/rohkat.jpg" class="center" alt="...">
      <div class="card-body">
        <h5 class="card-title">UKM Kerohanian Katolik (UKM Rohkat)</h5>
        <a href="ukm3.php" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img style="height: 500px;" src="img/rohin1.jpg" class="center" alt="...">
      <div class="card-body">
        <h5 class="card-title">UKM Kerohanian Hindu (UKM Rohin)</h5>
        <a href="ukm4.php" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
  <div class="card-group mt-5">
    <div class="card" style="width: 18rem;">
      <img style="height: 500px;" src="img/rohbud.jpg" class="center" alt="...">
      <div class="card-body">
        <h5 class="card-title">UKM Kerohanian Budha (UKM Rohbud)</h5>
        <a href="ukm5.php" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img style="height: 500px;" src="img/rohkhong1.jpg" class="center" alt="...">
      <div class="card-body">
        <h5 class="card-title">UKM Rohani Khonghuchu (UKM RohKhong)</h5>
        <a href="ukm6.php" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
  <div class="card-group mt-5">
    <div class="card" style="width: 18rem;">
      <img style="height:500px;" src="img/ukmpadus.jpeg" class="center" alt="...">
      <div class="card-body">
        <h5 class="card-title">UKM Paduan Suara (UKM PS)</h5>
        <a href="ukm7.php" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img style="height:500px;" src="img/ukmmapa.jpg" class="" alt="...">
      <div class="card-body">
        <h5 class="card-title">UKM Mahasiswa Pencinta Alam (UKM MAPA)</h5>
        <a href="ukm8.php" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>

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
</body>

</html>