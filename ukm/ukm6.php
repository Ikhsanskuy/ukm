<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UKM Universitas Gunadarma</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <style>
    .banner-image {
      background-image: url('img/rohkhong.jpg');
      background-size: cover;
      filter: blur(3px);
    }
  </style>
</head>

<body>
  <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
      <a class="navbar-brand" href="#">Universitas Gunadarma</a>
      <a class="navbar-brand" href="#">UKM Rohani Khonghuchu (UKM RohKhong)</a>
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
    </div>
  </div>

  <!-- Main Content Area -->
  <div class="container my-5 d-grid gap-5">
    <div class="border">
      <h2 class="text-center"> UKM Rohani Khonghuchu (UKM RohKhong) </h2>
      <p>
      Unit Kegiatan Mahasiswa (UKM) adalah lembaga kemahasiswaan tempat berkumpulnya mahasiswa
      yang memiliki kesamaan minat atau kegemaran, kreativitas, serta orientasi aktivitas penyaluran
      kegiatan ekstrakurikuler di dalam kampus. Di bangku sekolah, istilah UKM ini biasanya dikenal dengan istilah ekskul atau ekstrakurikuler.
      Tidak hanya berlandaskan pada azas manfaat semata, UKM juga berlandaskan pada azas edukatif dan memiliki nilai-nilai sosial
      di antaranya: saling menghargai, gotong-royong, peduli terhadap sesama, kemandirian, persatuan dan kesatuan.
      Universitas Gunadarma sendiri memiliki beberapa Unit Kegiatan Mahasiswa (UKM) yang berjalan sampai dengan saat ini. 
      </p>
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