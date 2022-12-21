<?php
if (!isset($_SESSION)) {
    session_start();
}

include '../koneksi.php';


// include "include/head.php";
// include "../include/header.php";
$id = mysqli_real_escape_string($conn, $_GET['id']);
// $ambil = $conn->query("SELECT * FROM ukm WHERE id='$_GET[id]'");
$ambil = $conn->query("SELECT * FROM ukm WHERE `id`=$id ");
$detail = $ambil->fetch_assoc();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" type="image/icon" href="../image/ug.ico"/> -->
    <link rel="shortcut icon" type="image/png" href="../image/ug.png">
    <!-- <link rel="icon" type="image/x-icon" href="../image/ug.ico"> -->
    <title>Halaman detail UKM</title>

    <!-- Bootstrap core CSS -->
    <link href="../js/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
    <link href="../admin/assets/css/stylefooter.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<?php
include "header.php";
?>

<body>

    <header>

    </header>

    <main role="main">
        <section>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="first-slide" src="../image/ukm/<?= $detail['foto'] ?>" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <p><?php echo $detail['deskripsi']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="first-slide" src="../image/ukm/<?= $detail['foto1'] ?>" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <p><?php echo $detail['deskripsi1']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="first-slide" src="../image/ukm/<?= $detail['foto2'] ?>" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <p><?php echo $detail['deskripsi2']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <!-- Marketing messaging and featurettes
      ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">


            <div>
                <h2 class="featurette-heading text-center mb-3">
                    <p><?php echo $detail['nama']; ?></p>
                </h2>
                <p class="lead"><?php echo $detail['deskukm']; ?></p>
            </div>
            <!-- <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="./image/ug.png" alt="Generic placeholder image">
                </div> -->


            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer>
            <div class="footer-content">
                <h3>Hubungi UKM kami disini</h3>
                <ul class="socials">
                    <li><a href="<?= $detail['ig']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="<?= $detail['twt']; ?>" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></a></li>
                </ul>
                <p>Copyright &copy; 2022. designed by <span>UKM Gunadarama</span></p>
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