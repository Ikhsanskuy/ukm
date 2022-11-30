<?php
if (!isset($_SESSION)) {
    session_start();
}

include '../koneksi.php';


// include "include/head.php";
include "../include/header.php";
$id = mysqli_real_escape_string($conn, $_GET['id']);
// $ambil = $conn->query("SELECT * FROM ukm WHERE id='$_GET[id]'");
$ambil = $conn->query("SELECT * FROM news WHERE `id`=$id ");
$detail = $ambil->fetch_assoc();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../js/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
    <link href="../admin/assets/css/stylefooter.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<header class="header_area">

    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand logo_h" href="../index.php"><img src="../image/logos-tri.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<body>

    <header>

    </header>

    <main role="main">

        <!-- Marketing messaging and featurettes
      ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">


            <!-- START THE FEATURETTES -->



            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading mb-5"><?= $detail['nama'] ?></h2>
                    <p class="lead"><?= $detail['deskripsi'] ?></p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="../image/news/<?= $detail['foto'] ?>" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer>
            <div class="footer-content">
                <h3>Hubungi UKM kami disini</h3>
                <ul class="socials">
                    <li><a href="<?= $pecah['ig']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="<?= $pecah['twt']; ?>" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></a></li>
                </ul>
                <p>Copyright &copy; 2022 codeOpacity. designed by <span>Angkringan Ceria</span></p>
            </div>
        </footer>

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../js/vendor/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
</body>

</html>