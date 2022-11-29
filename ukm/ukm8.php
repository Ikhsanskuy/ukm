<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UKM Universitas Gunadarma</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .banner-image {
      background-image: url('img/ukmmapa1.jpg');
      background-size: cover;
      filter: blur(3px);
    }

    .fa {
      padding: 20px;
      font-size: 30px;
      width: 50px;
      text-align: justify;
      text-decoration: none;
      margin: 5px 2px;
    }
  </style>
</head>

<body>
  <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
      <a class="navbar-brand" href="#">Universitas Gunadarma</a>
      <a class="navbar-brand" href="#">UKM Mahasiswa Pencinta Alam (UKM MAPA)</a>
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
      <h2 class="text-center"> UKM Mahasiswa Pencinta Alam (UKM MAPA) </h2>
      <p>UKM mahasiswa pencinta alam atau yang disebut MAPA adalah salah satu UKM yang lebih berbidang kepada kegiatan
        alam bebas sehingga diperlukan bibit yang mempunyai semangat, mental, jiwa dan rohani yang kuat. Oleh karena itu perlulah suatu
        wadah yang dapat mendidik mahasiswa untuk menjadi mahasiswa yang mampu bersaing dan sportif dalam setiap kegiatan
        dan kehidupan sehari-hari terutama dilingkungan kampus. Keuntungan mempunyai UKM MAPA adalah wujud dari sempurnanya
        suatu kampus yang mempunyai unit-unit kegiatan yang merupakan wujud sehatnya suatu kampus. Mahasiswa yang menjadi bibit
        dari UKM MAPALA akan digemleng untuk menjadi mahasiswa yang mandiri yang tidak cengeng, yang sehat jasmani dan rohani serta
        sebagai Negosiator yang unggul dalam kehidupan sehari-harinya.

      <p>Kegiatan MAPA lebih banyak kealam bebas, seperti Pendakian Gunung, Expedisi yang dapat berupa Gunung, laut, Hutan.
        Kemudian Panjat tebing, Olah raga Arum Jeram (ORAM) dan susur goa.MAPALA biasanya juga mempunyai kegiatan sosisal seperti
        mengikuti pengumpulan dana untuk korban bencana alam, ataupun melakukan bakti social (BAKSOS). Serta melakukan atau mengikuti
        Penanam Pohon. Tujuan MAPA pada umumnya adalah untuk melakukan silaturrahmi antar masyarakat, sesama Pencinta Alam maupun sesama
        Mahasiswa yang sesuai dengan Kode Etik Pencinta Alam. Dan yang menjadi tujuan khusus dari Pencinta Alam adalah melakukan perenungan
        alam (tadabbur alam) yaitu menghargai Sang Pencipta-Nya.
      </p>
      <b>Alamat</b>
      <br>Jl. Komjen.Pol.M.Jasin No.9, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451

      <center>
        <img src="img/mapa1.jpg" class="img-thumbnail" width="400px">
        <img src="img/mapa2.jpg" class="img-thumbnail" width="400px">
        <img src="img/mapa3.jpg" class="img-thumbnail" width="400px">
      </center>

      <center><br><b>Kontak:</b>
        <br><a href="https://www.instagram.com/mapa.gunadarma/" class="fa fa-instagram"></a>
        <a href="https://mobile.twitter.com/mapagunadarma" class="fa fa-twitter"></a>
      </center>
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