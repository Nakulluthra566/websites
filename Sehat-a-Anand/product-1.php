<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
}

$id = $_SESSION['id'];
$query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

while ($result = mysqli_fetch_assoc($query)) {
    $res_Uname = $result['Username'];
    $res_Email = $result['Email'];
    $res_Age = $result['Age'];
    $res_id = $result['Id'];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sehat-a-Anand</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

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
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="home.php" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">Sehat-a-Anand</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="home.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Service</a>
                    <a href="menu.php" class="nav-item nav-link active">Menu</a>
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Choco Delicacy
            </h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="home.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <a class="m-0 text-white" href="menu.php">Menu</a>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Choco Delicacy</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="mx-5 d-flex flc">
        <div class="img">
            <img src="img/menu-1.jpg" alt="Img" class="br-20 w-75">
            <div class=" mt-5 d-flex flex-column">
                <h2>
                    Price: $5
                </h2>
                <h2>
                    Shipping: Free

                </h2>
                <button class="btn btn-success rounded mt-3">Add To Cart</button>
            </div>
        </div>
        <div class="d-flex w-100 flex-column align-items-center">
            <h1 class="text-uppercase ml-5">Choco delicacy
            </h1>
            <div class="container my-5">
                <h5 class="text-dark">
                    Not only in India, but in every country chocolate flavour
                    tackles the taste of almost every individual. It is consumed
                    and liked by almost everyone .Keeping in view the
                    behaviour of customer, we have prepared our ready to use
                    health milk powder"CHOCO DELICACY" . The products offers
                    the nutrients which are essential to stay healthy . Healthy
                    and organic alternatives have been used in our product
                    such as cocoa for chemical based chocolate powder ,
                    jaggery instead of sugar and much more. Such a blend of
                    chocolate flavour with natural ingredients will make you fall
                    in love with our product !

                </h5>
            </div>
            <div class="d-flex mt-3 flex-column align-items-center">
                <h1 class="text-primary text-center">INGREDIENTS
                </h1>

                <div class="d-flex ">
                    <img class="img w-40 br-20 ml-5 mt-3" src="img/ing-1.jpg" alt="">
                    <div class="d-flex flex-column container">
                        <h3 class="mt-4 text-center">MAKHANE / FOXNUT</h3>
                        <p class="mt-3 text-deatail mx-5">
                            Makhana is a healthy Indian snack and a rich source of
                            calcium . The seeds of the product are edible after they
                            are processed.It has lower cholesterol, fat and sodium,
                            therefore it also an ideal weight-loss snack as it is low in
                            calories. It has also a high nutritional value and is a rich
                            source of proteins, carbohydrates, fibre, potassium, iron,
                            and zinc. It also help us to overcome insomnia and
                            arthritis, and improve cognitive functions.
                        </p>

                    </div>

                </div>
                <div class="d-flex mt-5">
                    <div class="d-flex flex-column container">
                        <h3 class="mt-4 text-center">ALMONDS</h3>
                        <p class="mt-3 text-deatail mx-5">
                            Almonds are a species of small tree from the genus Prunus, cultivated worldwide for
                            their
                            seed, a culinary nut. They are
                            classified in the subgenus Amygdalus, distinguished from other subgenera by corrugations
                            on
                            the shell surrounding the
                            seed. Almonds are native to the Mediterranean region and were cultivated as early as
                            3000
                            BC.

                        </p>

                    </div>
                    <img class="img w-40 br-20 ml-5 mt-3" src="img/ing-2.jpg" alt="">

                </div>
                <div class="d-flex mt-5">
                    <img class="img w-40 br-20 ml-5 mt-3" src="img/ing-3.jpg" alt="">
                    <div class="d-flex flex-column container">
                        <h3 class="mt-4 text-center">JAGGERY POWDER</h3>
                        <p class="mt-3 text-deatail mx-5">
                            Jaggery powder has numerous health benefits due to its high nutritional value and minimal
                            processing, making it a
                            healthier alternative to refined sugar. Jaggery is used to prepare traditional sweet dishes
                            like karadantu, godhi
                            huggi, chikki, gazak, payasam, etc. It is claimed to have various health benefits such as
                            improved digestive health,
                            anemia prevention, liver detoxification, and improved immune function.
                        </p>

                    </div>

                </div>
                <div class="d-flex mt-5">
                    <div class="d-flex flex-column container">
                        <h3 class="mt-4 text-center">COCOA POWDER
                        </h3>
                        <p class="mt-3 text-deatail mx-5">
                            Cocoa is rich in micronutrients polyphenols and
                            powerful antioxidants flavanols, which help reduce
                            inflammation, lower blood pressure and improve
                            cholesterol and blood sugars. It’s even known to have
                            antidepressant-like effects. Natural, or non-alkalized,
                            cocoa powder and dark chocolate provide the greatest
                            health benefits though they may not taste as sweet as
                            hot cocoa mixes you find on the shelves.

                        </p>

                    </div>
                    <img class="img w-40 br-20 ml-5 mt-3" src="img/ing-4.jpg" alt="">

                </div>
            </div>
        </div>


    </div>


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