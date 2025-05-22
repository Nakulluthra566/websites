<?php
session_start();

include('php/config.php');
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sehat-a-Anand</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>

    <?php
    $id = $_SESSION['id'];
    $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

    while ($result = mysqli_fetch_assoc($query)) {
        $res_Uname = $result['Username'];
        $res_Email = $result['Email'];
        $res_Age = $result['Age'];
        $res_id = $result['Id'];
    }

    ?>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <img src="img/logo.png" alt="" class="width-logo">
            <a href="home.php" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-outline-dark" style="color: #FFFB99;">Sehat-a-Anand</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="home.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Service</a>
                    <a href="menu.php" class="nav-item nav-link">Menu</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a class="text-dark mr-3 rounded bg-white nav-item nav-link"><b>Hello! <span class="text-success">
                                <?php echo $res_Uname ?>
                            </span></b></a>
                    <form action="php/logout.php" method="post">
                        <input type="submit" value="Log Out" class="btn btn-danger rounded-lg" />
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel overlay-bottom">
            <div class="">
                <div>
                    <img class="w-100" src="img/back.jpg" alt="Image">
                    <div id="gradient"
                        class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h1 class="display-1 text-light m-0 text-outline-dark" style="z-index: 10;">Sehat-a-Anand</h1>
                        <h2 class="text-white m-0 text-uppercase" style="z-index: 10;">" <span
                                style="z-index: 10; color: #FFFB99;" class="text-outline-dark">Flavorful grace ,
                                Wellness embrace</span> "</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <style>
        #gradient {
            background: linear-gradient(-45deg, #56CD44, #4DD4B7, #4DABD4, #1175D1);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
                <h1 class="display-4">Sehat-a-Anand</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Story</h1>
                    <h5 class="mb-3">Since the past few years , specifically after the pandemic people are becoming more
                        health
                        conscious. People are searching for the product which improve their health status and tackles
                        their
                        taste . Of course, everybody knows there is nothing better than "MILK" which is a complete food
                        and it's the part of diet of almost every individual but what about the taste ?We came up with
                        the
                        idea of making ready to use milk mix By our brand Sehat-a-Anand.. Our main motive is to
                        alternate the chemical based products with our organic one . . And we are pretty sure that our
                        products would be liked by all.</p>
                        <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-4">Learn More</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Vision</h1>
                    <p> We are promoting A truly healthy lifestyle in a delicious way ! By our
                        brand Sehat-a-Anand.. Our main motive is to alternate the chemical
                        based products with our organic one . We want the product to reach
                        every household in India and well as globally and improve the
                        nutritional status of people. The products are being made with the most
                        healthy and essential ingredients.</p>
                    <h6 class="mb-3"><i class="fa fa-check text-secondary mr-3"></i>LOADED WITH GOODNESS OF NUTS</h6>
                    <h6 class="mb-3"><i class="fa fa-check text-secondary mr-3"></i>RICH SOURCE OF CALCIUM</h6>
                    <h6 class="mb-3"><i class="fa fa-check text-secondary mr-3"></i>USAGE OF NATURAL PRODUCTS</h6>
                    <h6 class="mb-3"><i class="fa fa-check text-secondary mr-3"></i>FREE FROM CHEMICAL PRESERVATIVES
                    </h6>
                    <h6 class="mb-3"><i class="fa fa-check text-secondary mr-3"></i>OUR PRODUCTS ARE SUGAR FREE</h6>
                    <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Services</h4>
                <h1 class="display-4">Fresh & Organic Beans</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="row align-items-center">
                            <div class="col-sm-5">
                                <img class="img-fluid mb-3 mb-sm-0" src="img/service-3.jpg" alt="">
                            </div>
                            <div class="col-sm-7">
                                <h4><i class="fa fa-award service-icon"></i>Best Quality</h4>
                                <p class="m-0">At Sehat-a-Anand, we redefine excellence by curating a collection of the
                                    finest
                                    products that embody unparalleled quality. Elevate your everyday experiences with a
                                    touch of sophistication and indulge in a world where only the best will do.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-coffee service-icon"></i>Fresh Products</h4>
                            <p class="m-0">Choose health without compromising on taste. Sehat-a-Anand is proud to offer
                                a wide array of organic products, free from pesticides and chemicals, providing you with
                                wholesome, flavorful options for a healthier lifestyle.

                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="mx-5">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
                <h1 class="display-4">Product Lists</h1>
            </div>
            <div class="d-flex align-items-center mb-5">
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-1.jpg" alt="">
                        <h5 class="menu-price">$5</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Choco delicacy</h4>
                        <p class="m-0">The products offers
                            the nutrients which are essential to stay healthy . Healthy
                            and organic alternatives have been used in our product</p>
                        <a href="product-1.php" class="btn btn-primary mt-3 rounded">Learn More</a>
                    </div>
                </div>
                <div class="row align-items-center mb-5 ml-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-2.jpg" alt="">
                        <h5 class="menu-price">$5</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Nuts Harmony</h4>
                        <p class="m-0">Our product " NUTS HARMONY" loaded with goodness of nuts.This not only provides a
                            good health
                            but also ensure a boost to immunity.</p>
                        <a href="product-2.php" class="btn btn-primary mt-3 rounded">Learn More</a>

                    </div>
                </div>
                <div class="row align-items-center mb-5 ml-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-3.jpg" alt="">
                        <h5 class="menu-price">$5</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Luscious pista</h4>
                        <p class="m-0">nstead of
                            having a beverage with chemical preservatives one must
                            enjoy our ' luscious pista '.Natural ingredients are used in
                            our product.</p>
                        <a href="product-3.php" class="btn btn-primary mt-3 rounded">Learn More</a>

                    </div>
                </div>
                <div class="row align-items-center mb-5 ml-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-4.jpg" alt="">
                        <h5 class="menu-price">$5</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Coconut Cascade</h4>
                        <p class="m-0">Sehat-a-Anand's Coconut Cascade isn't just about incredible taste –
                            it's a wholesome treat for your well-being too!

                        </p>
                        <a href="product-4.php" class="btn btn-primary mt-3 rounded">Learn More</a>

                    </div>
                </div>

            </div>
        </div>
        <!-- Menu End -->



        <!-- Footer Start -->
        <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
            <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
                <div class="col-lg-4 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Innocent Hearts School, Nurpur, Jalandhar, Punjab.</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+91 99154 09553</p>
                    <p class="m-0"><i class="fa fa-envelope mr-2"></i>sehat.a.anand@gmail.com</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4 text-center" style="letter-spacing: 3px;">Follow Us</h4>
                    <p class=" text-center">Follow Us on Social Medias For more Information About our Company and to
                        Contact us.</p>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2"
                            href="https://x.com/sehat_a_anand?t=-W9b9PnVBeMocdS2ozvK0w&s=08"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2"
                            href="https://www.facebook.com/profile.php?id=61554276280423&mibextid=ZbWKwL"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2"
                            href="https://innocenthearts.in/"><i><ion-icon name="school-outline"></ion-icon></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square"
                            href="https://instagram.com/sehat_a_anand?igshid=OGQ5ZDc2ODk2ZA=="><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4 text-right" style="letter-spacing: 3px;">All Pages</h4>
                    <p class=" text-right mb-5">Access all Main Pages In this Website for Convinience.</p>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-outline-light mr-2" href="index.html">Home</a>
                        <a class="btn btn-outline-light mr-2" href="about.html">About</a>
                        <a class="btn btn-outline-light mr-2" href="service.html">Service</a>
                        <a class="btn btn-outline-light mr-2" href="menu.html">Menu</a>
                        <a class="btn btn-outline-light mr-2" href="contact.html">Contact</a>
                        <a class="btn btn-outline-light mr-2" href="login.html">Sign In</a>
                    </div>
                </div>


            </div>
            <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5"
                style="border-color: rgba(256, 256, 256, .1) !important;">
                <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Sehat-a-Anand</a>. All
                    Rights
                    Reserved.</a></p>
                <p class="m-0 text-white">Designed by <a class="font-weight-bold"
                        href="https://github.com/NakulLuthraGithub">Nakul Luthra</a></p>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>