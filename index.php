<!DOCTYPE html>
<html>

<?php include 'head.php'; ?>

<body>
    <?php include 'nav.php'; ?>

    <!-- <section id="page-header">
        <div class="container">
            <h1>Home</h1>
        </div>
    </section> -->

    <header id="home">
        <div id="home-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home-carousel" data-slide-to="1"></li>
                <li data-target="#home-carousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/resources/images/home-1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/resources/images/home-2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/resources/images/home-3.jpg" alt="Third slide">
                </div>
            </div>
        </div>
    </header>

    <section id="about-us">
        <div class="container">
            <h5>ABOUT US</h5>
            <h1>EXPLORE THE RED SEA ONE</h1>

            
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean at malesuada libero, eget cursus eros. Vivamus
                in bibendum ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                Morbi nec pretium nunc, in molestie felis. Aliquam finibus erat felis, pellentesque lobortis augue fringilla
                sit amet. Praesent ornare facilisis mattis. Integer fringilla lacus a orci laoreet lobortis vel nec ligula.
                Curabitur ut elementum mauris.
                </p>
        </div>
    </section>

    <section id="home-gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="assets/resources/images/home-gallery-1.jpg" class="img-thumbnail img-fluid">
                </div>
                <div class="col-lg-3">
                    <img src="assets/resources/images/home-gallery-2.jpg" class="img-thumbnail img-fluid">
                </div>
                <div class="col-lg-3">
                    <img src="assets/resources/images/home-gallery-3.jpg" class="img-thumbnail img-fluid">
                </div>
                <div class="col-lg-3">
                    <img src="assets/resources/images/home-gallery-3.jpg" class="img-thumbnail img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <img src="assets/resources/images/home-gallery-1.jpg" class="img-thumbnail img-fluid">
                </div>
                <div class="col-lg-3">
                    <img src="assets/resources/images/home-gallery-2.jpg" class="img-thumbnail img-fluid">
                </div>
                <div class="col-lg-3">
                    <img src="assets/resources/images/home-gallery-3.jpg" class="img-thumbnail img-fluid">
                </div>
                <div class="col-lg-3">
                    <img src="assets/resources/images/home-gallery-3.jpg" class="img-thumbnail img-fluid">
                </div>
            </div>
        </container>
    </section>

    
    <section id="promo">
        <div class="container">
            <h2>Promo</h2>
        </div>
    </section>

    <section id="diving-with-us">
        <div class="container">
            <h2>Diving with us</h2>
        </div>
    </section>

    <button type="button" id="book-now" class="btn btn-primary btn-lg">Book Now!</button>

    <?php include 'footer.php'; ?>

</body>

</html>