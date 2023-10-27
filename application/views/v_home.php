<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KEC NEWS PORTAL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/logo_kec.png' ?>">

    <!-- Bootstr<ap CSS File -->
    <link href="<?php echo base_url() . 'depan/lib/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url() . 'depan/lib/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'depan/lib/animate/animate.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'depan/lib/ionicons/css/ionicons.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'depan/lib/owlcarousel/assets/owl.carousel.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'depan/lib/lightbox/css/lightbox.min.css' ?>" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url() . 'depan/css/style.css' ?>" rel="stylesheet">


</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid">
            <div id="logo" class="pull-left">

                <h1><a href="<?php echo base_url() . 'Home' ?>">KEC News Portal</a></h1>

            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="<?php echo base_url() . 'Home' ?>">Home</a></li>
                    <li class="menu-has-children"><a href="">Berita</a>
                        <ul>
                            <?php
                            $query = $this->db->get('tbl_kategori');
                            foreach ($query->result() as $row) :
                            ?>
                                <li><a class="dropdown-item nav-link nav_item" href="#about">
                                        <?php echo strtoupper($row->kategori_nama); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><a href="#portfolio">Gallery</a></li>
                    <li><a href="<?php echo base_url() . 'pendaftaran' ?>">SIGN UP</a></li>

                    <li><a href="<?php echo base_url() . 'user/user' ?>">LOGIN USER</a></li>
                    <li><a href="<?php echo base_url() . 'Administrator' ?>">LOGIN ADMIN</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>


    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="<?php echo base_url() . 'theme/images/bg1.jpg' ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>KEC NEWS PORTAL</h2>
                                <h3>
                                    <p>Informasi, Inspirasi, & Interaksi</p>
                                </h3>

                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?php echo base_url() . 'theme/images/bg2.jpg' ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>KEC NEWS PORTAL</h2>
                                <h3>
                                    <p>Informasi, Inspirasi, & Interaksi</p>
                                </h3>


                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?php echo base_url() . 'theme/images/bg3.jpg' ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>KEC NEWS PORTAL</h2>
                                <h3>
                                    <p>Informasi, Inspirasi, & Interaksi</p>
                                </h3>


                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?php echo base_url() . 'theme/images/bg4.jpg' ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>KEC NEWS PORTAL</h2>
                                <h3>
                                    <p>Informasi, Inspirasi, & Interaksi</p>
                                </h3>


                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?php echo base_url() . 'theme/images/bg5.jpg' ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>KEC NEWS PORTAL</h2>
                                <h3>
                                    <p>Informasi, Inspirasi, & Interaksi</p>
                                </h3>


                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- #intro -->

    <main id="main">



        <!--==========================
      About Us Section
    ============================-->
        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>KEC NEWS</h3>
                    <p>BERITA SEPUTAR KEGIATAN DAN PROGRAM KERJA KEC
                    </p>
                </header>

                <div class="row about-cols">


                    <?php foreach ($data->result() as $row) : ?>

                        <div class="col-md-4 wow fadeInUp">
                            <div class="about-col">
                                <div class="img">
                                    <img src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar ?>" alt="" class="img-fluid">
                                    <header class="section-header">
                                        <h3><?php echo $row->tulisan_kategori_nama; ?></h3>
                                    </header>
                                </div>
                                <h2 class="title"><a href="#"><?php echo $row->tulisan_judul; ?></a>
                                </h2>
                                <p>
                                    <?php echo substr($row->tulisan_isi, 0, 100) . '...'; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>




                </div>

            </div>
        </section><!-- #about -->





        <section id="portfolio" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">GALLERY</h3>
                </header>

                <!-- <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div> -->

                <div class="row portfolio-container">

                    <?php foreach ($album->result() as $row) : ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="<?php echo base_url() . 'assets/images/' . $row->album_cover ?>" class="img-fluid" alt="">
                                    <a href="<?php echo base_url() . 'assets/images/' . $row->album_cover ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </figure>

                                <div class="portfolio-info">
                                    <h4><a href="#"><?php echo $row->album_nama; ?></a></h4>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </section><!-- #portfolio -->



        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h3>Contact Us</h3>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Address</h3>
                            <address>Jl. Rangga Gading No.1, RT.02/RW.09, Gudang, Kecamatan Bogor Tengah Kota Bogor Jawa Barat</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+155895548855">+62 857-1111-1210</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">kesatuanenglishclub@gmail.com</a></p>
                        </div>
                    </div>

                </div>

                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>
        </section><!-- #contact -->
    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">


        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>KEC NEWS PORTAL</strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="<?php echo base_url() . 'depan/lib/jquery/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/jquery/jquery-migrate.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/easing/easing.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/superfish/hoverIntent.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/superfish/superfish.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/wow/wow.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/waypoints/waypoints.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/counterup/counterup.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/owlcarousel/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/isotope/isotope.pkgd.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/lightbox/js/lightbox.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/touchSwipe/jquery.touchSwipe.min.js' ?>"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?php echo base_url() . 'depan/contactform/contactform.js' ?>"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo base_url() . 'depan/js/main.js' ?>"></script>

</body>

</html>