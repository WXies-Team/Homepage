<!DOCTYPE html>
<html lang="cn">

    <!-- Head -->
    <?php include('head.php'); ?>

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

    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Main -->
    <?php include('main.php'); ?>

    <!-- About us -->
    <?php include('about.php'); ?>

    <!-- Services -->

    <!-- Footer -->
    <?php include('footer.php'); ?>

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