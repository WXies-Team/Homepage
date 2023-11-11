<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>唯蟹 Team - We Quest On and On</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Pe-7 icon -->
    <link href="css/pe-icon-7.css" rel="stylesheet" type="text/css" />

    <!--Slider-->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--Navbar Start-->
    <?php include('navbar.php'); ?>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <?php include('hero-section.php'); ?>
    <!-- Hero End -->

    <!-- About us Start -->
    <?php include('about-section.php'); ?>
    <!-- About us End -->

    <!-- Services Start -->
    <?php include('services-section.php'); ?>
    <!-- Services End -->

    <!-- Footer Start -->
    <?php include('footer-section.php'); ?>
    <!-- Footer End -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <!-- feather icons -->
    <script src="js/feather.min.js"></script>

    <!-- carousel -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- Main Js -->
    <script src="js/app.js"></script>

    <script>
        feather.replace()

        $('#testi-clients').owlCarousel({
            loop: true,
            center: true,
            autoplay: true,
            autoplayTimeout: 3000,
            margin: 20,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>

</body>

</html>
