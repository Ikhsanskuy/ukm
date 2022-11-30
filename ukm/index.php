<?php
if (!isset($_SESSION)) {
    session_start();
}

include '../koneksi.php';


// include "include/head.php";
include "../include/header.php";

// $ambil = $conn->query("SELECT * FROM ukm WHERE id='$_GET[id]'");
// $ambil = $conn->query("SELECT * FROM ukm");
// $detail = $ambil->fetch_assoc();
$ambil = $conn->query("SELECT * FROM ukm");
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../vendors/linericon/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link href="../css/carousel.css" rel="stylesheet">
    <link href="../js/bootstrap.min.css" rel="stylesheet">
</head>
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
        <!-- <section>
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
        </section> -->

        <!-- Marketing messaging and featurettes
      ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <section class="accomodation_area section_gap">
                <div class="container">
                    <div class="section_title text-center">
                        <h2 class="title_color">UKM</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>

                    <div class="row mb_30">
                        <?php
                        $count = 0;
                        foreach ($ambil as $items) {
                            $count++;
                        ?>
                            <div class="col-lg-3 col-sm-6">
                                <div class="accomodation_item text-center">
                                    <div class="hotel_img">
                                        <img src="../image/ukm/<?= $items['foto']; ?>" width="250" height="250" style="border-radius:10%">
                                        <!-- <a href="detail_trip.php?trip_id=<?= $items['kode_trip'] ?>" class="btn theme_btn button_hover">Detail</a> -->
                                    </div>
                                    <h4 class="sec_h4"><?= $items['nama'] ?></h4>
                                    <a href="ukm.php?id=<?= $items['id'] ?>">Detail</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </section>

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