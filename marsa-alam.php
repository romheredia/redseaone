<!DOCTYPE html>
<html>

<?php include 'head.php'; ?>

<body>
    <?php include 'nav.php'; ?>

    <section id="page-header">
        <div class="container">
            <h1>Marsa Alam</h1>
        </div>
    </section>

    <header id="marsa-alam">
        <div class="container">

        </div>
    </header>

    <section id="about">

        <div class="container">
            <h2>About Marsa Alam</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean at malesuada libero, eget cursus eros. Vivamus
                in bibendum ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                Morbi nec pretium nunc, in molestie felis. Aliquam finibus erat felis, pellentesque lobortis augue fringilla
                sit amet. Praesent ornare facilisis mattis. Integer fringilla lacus a orci laoreet lobortis vel nec ligula.
                Curabitur ut elementum mauris.</p>
            <p>
                Suspendisse consectetur congue facilisis. Proin ipsum nisl, pellentesque a nunc quis, sollicitudin condimentum purus. Nunc
                augue sem, ornare non consectetur mollis, lacinia id lectus. Duis augue ipsum, pretium et magna et, ornare
                luctus orci. Praesent luctus, libero et varius tempus, augue quam suscipit odio, id dictum turpis elit varius
                erat. Pellentesque at dui ullamcorper, vestibulum nunc et, laoreet orci. In orci augue, aliquet ut commodo
                sit amet, tempor non nibh.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean at malesuada libero, eget cursus eros. Vivamus
                in bibendum ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                Morbi nec pretium nunc, in molestie felis. Aliquam finibus erat felis, pellentesque lobortis augue fringilla
                sit amet. Praesent ornare facilisis mattis. Integer fringilla lacus a orci laoreet lobortis vel nec ligula.
                Curabitur ut elementum mauris.</p>
            <p>
                Suspendisse consectetur congue facilisis. Proin ipsum nisl, pellentesque a nunc quis, sollicitudin condimentum purus. Nunc
                augue sem, ornare non consectetur mollis, lacinia id lectus. Duis augue ipsum, pretium et magna et, ornare
                luctus orci. Praesent luctus, libero et varius tempus, augue quam suscipit odio, id dictum turpis elit varius
                erat. Pellentesque at dui ullamcorper, vestibulum nunc et, laoreet orci. In orci augue, aliquet ut commodo
                sit amet, tempor non nibh.
            </p>
        </div>
        </div>

    </section>

    <section id="marsa-alam-map">
        <script>
            function mapMarsaAlam() {
                var mapOptions = {
                    center: new google.maps.LatLng(25.0676256, 34.8789697),
                    zoom: 10,
                    mapTypeId: google.maps.MapTypeId.HYBRID
                }
                var map = new google.maps.Map(document.getElementById("marsa-alam-map"), mapOptions);
            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?callback=mapMarsaAlam"></script>
    </section>

    <?php include 'footer.php' ?>

</body>

</html>