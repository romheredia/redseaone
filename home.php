<?php include 'layouts/head.php'; ?>

<?php include 'layouts/main_menu.php'; ?>

    <header id="home">
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#home-carousel" data-slide-to="1"></li>
            <li data-target="#home-carousel" data-slide-to="2"></li>
            <li data-target="#home-carousel" data-slide-to="3"></li>
            <li data-target="#home-carousel" data-slide-to="4"></li>
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
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/resources/images/home-4.jpg" alt="Fourth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/resources/images/home-5.jpg" alt="Fifth slide">
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
                <a href="#"><img src="assets/resources/images/home-gallery-1.jpg" class="img-thumbnail img-fluid"></a>
            </div>
            <div class="col-lg-3">
                <a href="#"><img src="assets/resources/images/home-gallery-2.jpg" class="img-thumbnail img-fluid"></a>
            </div>
            <div class="col-lg-3">
                <a href="#"><img src="assets/resources/images/home-gallery-3.jpg" class="img-thumbnail img-fluid"></a>
            </div>
            <div class="col-lg-3">
                <a href="#"><img src="assets/resources/images/home-gallery-4.jpg" class="img-thumbnail img-fluid"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <a href="#"><img src="assets/resources/images/home-gallery-5.jpg" class="img-thumbnail img-fluid"></a>
            </div>
            <div class="col-lg-3">
                <a href="#"><img src="assets/resources/images/home-gallery-6.jpg" class="img-thumbnail img-fluid"></a>
            </div>
            <div class="col-lg-3">
                <a href="#"><img src="assets/resources/images/home-gallery-7.jpg" class="img-thumbnail img-fluid"></a>
            </div>
            <div class="col-lg-3">
                <a href="#"><img src="assets/resources/images/home-gallery-8.jpg" class="img-thumbnail img-fluid"></a>
            </div>
        </div>
    </container>
    </section>

    <section id="diving-with-us">
    <div class="container">
        <h1 class="section-title">Diving with us</h1>
        <div class="row">
            <div class="col-lg-4">
            <div class="card-title"><i class="fas fa-ship fa-2x"></i><span class="card-title-text">LiveAboard<span></div>
            <p class="card-text">
                Praesent faucibus ante id dapibus scelerisque. Donec quis blandit eros, sit amet tristique orci. Nam convallis sit 
                amet nisl eget vehicula. Phasellus sed lobortis velit. Vestibulum nisl eros, egestas vitae sagittis vel, porta at leo. 
                Ut blandit leo non nulla blandit, eu tincidunt nisl maximus.
            </p>
            <a href="#"><i class="fas fa-caret-right"></i>more</a>
            </div>
            
        <div class="col-lg-4">
            <div class="card-title"><i class="fas fa-location-arrow fa-2x"></i><span class="card-title-text">Diving Spots</span></div>    
            <p class="card-text">
                Aliquam placerat augue eu erat cursus suscipit eget eget magna. Sed faucibus sem vel lorem aliquet, non suscipit nibh commodo.
                Sed egestas at libero eu sodales. Quisque et purus feugiat, cursus nunc luctus, dapibus enim. Sed maximus lectus sapien, ut finibus
                mauris scelerisque et.
            </p>
            <a href="#"><i class="fas fa-caret-right"></i>more</a>
        </div>
        <div class="col-lg-4">
            <div class="card-title"><i class="far fa-calendar-alt fa-2x"></i><span class="card-title-text">Schedule</span></div>
            <p class="card-text">
            Nam sit amet dapibus lorem. Etiam efficitur dui massa, vel imperdiet dui vestibulum eu. Vestibulum viverra vitae erat a pharetra. Phasellus
            sed orci sit amet massa malesuada sagittis sed in odio. Quisque mattis, lacus ut varius ullamcorper, lorem justo efficitur odio, et sagittis
            massa odio vitae neque.
            </p>
            <a href="#"><i class="fas fa-caret-right"></i>more</a>
        </div>
        </div>
    </div>
    </section>


    <section id="home-filler">

    </section>

    <section id="promo">
        <div class="container">
            Use Promo Code: <span class="promo-code">REDSEAONE</span> and get a 10% discount
        </div>
    </section>

    <button type="button" id="book-now" class="btn btn-info">Book Now!</button>
        

<?php include 'layouts/footer.php'; ?>
