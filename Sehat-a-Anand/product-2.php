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
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Nuts Harmony

            </h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="home.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <a class="m-0 text-white" href="menu.php">Menu</a>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Nuts Harmony</p>
                </p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="mx-5 d-flex flc">
        <div class="img">
            <img src="img/menu-2.jpg" alt="Img" class="br-20 w-75">
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
            <h1 class="text-uppercase ml-5">Nuts Harmony

            </h1>
            <div class="container my-5">
                <h5 class="text-dark">
                    We all know , Eating nuts regularly is good for your brain. Nut consumption is
                    linked to better cognitive function, reduced risk of depression, better mood,
                    and enhanced memory, learning and attention capacity . Our product " NUTS HARMONY" loaded with
                    goodness of nuts.This not only provides a good health
                    but also ensure a boost to immunity. The ingredients are obtained from
                    natural sources . The products are enriched with Almonds , Cashews,
                    Pistachio nuts . We with our motto to provide our customers " A TRULY
                    HEALTHY LIFESTYLE" and tried to bring out the best to the customer's platter.
                </h5>
            </div>
            <div class="d-flex mt-3 flex-column align-items-center">
                <h1 class="text-primary text-center ml-4">INGREDIENTS
                </h1>

                <div class="d-flex ">
                    <img class="img w-40 br-20 ml-5 mt-3" src="img/ing-5.jpg" alt="">
                    <div class="d-flex flex-column container">
                        <h3 class="mt-4 text-center">CASHEW NUTS</h3>
                        <p class="mt-3 text-deatail mx-5">
                            Not only do cashews taste great and work well in vegan
                            dishes, but they can also boost your body in a number of ways:
                            Lower cholesterol: Research suggests that cashews can
                            decrease total cholesterol and LDL ("bad") cholesterol when
                            substituted for a high-carb snack.
                            Healthier immune system: Cashews are a good source of zinc
                            and protein, two key ingredients to a stronger immune
                            system.

                        </p>

                    </div>

                </div>
                <div class="d-flex mt-5">
                    <div class="d-flex flex-column container">
                        <h3 class="mt-4 text-center">BLACK PEPPERCORNS</h3>
                        <p class="mt-3 text-deatail mx-5">
                            Black pepper is a good source of manganese, a mineral
                            that can help with bone health, wound healing, and
                            metabolism. In fact, one teaspoon of black pepper offers
                            13 percent of your daily recommended intake (DRI) of
                            manganese and 3 percent of your DRI of vitamin K.

                        </p>

                    </div>
                    <img class="img w-40 br-20 ml-5 mt-3" src="img/ing-6.jpg" alt="">

                </div>
                <div class="d-flex mt-5">
                    <img class="img w-40 br-20 ml-5 mt-3" src="img/ing-7.jpg" alt="">
                    <div class="d-flex flex-column container">
                        <h3 class="mt-4 text-center">MISHRI</h3>
                        <p class="mt-3 text-deatail mx-5">
                            Apart from regenerating blood circulation in our body, it
                            is also useful in anaemia, pale skin, dizziness, fatigue and
                            weakness. Therefore, people suffering from low
                            haemoglobin levels can consume 'mishri'.
                        </p>

                    </div>

                </div>
                <div class="d-flex mt-5">
                    <div class="d-flex flex-column container">
                        <h3 class="mt-4 text-center">ALMONDS
                        </h3>
                        <p class="mt-3 text-deatail text-deatail mx-5">
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
                <div class="d-flex ">
                    <img class="img w-40 br-20 ml-5 mt-3" src="img/ing-8.jpg" alt="">
                    <div class="d-flex flex-column container">
                        <h3 class="mt-4 text-center">GREEN CARDAMOM</h3>
                        <p class="mt-3 text-deatail mx-5">
                            Cardamom can ease inflammation and protect your
                            cells against something called oxidative stress, an
                            imbalance between free radicals and antioxidants
                            that can lead to a number of medical issues. It can
                            also help your body handle insulin better. Keep your
                            blood pressure healthy.


                        </p>

                    </div>

                </div>
                <div class="d-flex mt-5">
                    <div class="d-flex flex-column container">
                        <h3 class="mt-4 text-center">WHITE POPPY SEEDS</h3>
                        <p class="mt-3 text-deatail mx-5">
                            Poppy seeds are rich in iron. This helps purify the
                            blood and increase haemoglobin levels in the blood.
                            Consumption of poppy seeds can improve the
                            circulation of blood which results in an optimal
                            supply of oxygen to every part of the body including
                            your brain.

                        </p>

                    </div>
                    <img class="img w-40 br-20 ml-5 mt-3" src="img/ing-9.jpg" alt="">

                </div>
                <div class="d-flex mt-5">
                    <img class="img w-40 br-20 ml-5 mt-3" src="img/ing-10.jpg" alt="">
                    <div class="d-flex flex-column container">
                        <h3 class="mt-4 text-center">FENNEL SEEDS</h3>
                        <p class="mt-3 text-deatail mx-5">
                            The goodness of fennel seed essential oils
                            stimulates the secretion of digestive juices and
                            enzymes that improves your digestion. Fennel
                            seeds contain anethole, fenchone and estragole
                            that act as antispasmodic and anti-inflammatory.
                            They work wonderfully for constipation,
                            indigestion and bloating.

                        </p>

                    </div>

                </div>
                <div class="d-flex mt-5">
                    <div class="d-flex flex-column container">
                        <h3 class="mt-4 text-center">MELON SEEDS
                        </h3>
                        <p class="mt-3 text-deatail mx-5">
                            Regulates blood pressure: Arginine present in
                            watermelon seeds plays a significant role in
                            regulating the blood pressure. It also plays a
                            pivotal role in the prevention of coronary heart
                            diseases. Get rid of dandruff: People with itchy
                            scalp and dandruff can use watermelon seed oil
                            for some relief.
                        </p>

                    </div>
                    <img class="img w-40 br-20 ml-5 mt-3" src="img/ing-11.jpg" alt="">

                </div>
                <div class="d-flex mt-5">
                    <img class="img w-40 br-20 ml-5 mt-3" src="img/ing-12.jpg" alt="">
                    <div class="d-flex flex-column container">
                        <h3 class="mt-4 text-center">SAFFRON</h3>
                        <p class="mt-3 text-deatail mx-5">
                            Saffron is rich in plant compounds that act as
                            antioxidants, such as crocin, crocetin, safranal, and
                            kaempferol. Antioxidants help protect your cells
                            against oxidative stress.
                        </p>

                    </div>

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