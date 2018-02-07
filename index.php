<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <title>Red Sea One</title>

    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/resources/css/style-old.css">

    <style>

        body {
            background-image: url("assets/resources/images/turtle.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: #fff;
            position: relative;
        }

        .pageone .logo img {
            height: 100px;
        }

        .h1 {
            font-weight: lighter;
            font-size: 26px;
            letter-spacing: 15px;
            margin-right: -15px;
            color: #fff;
        }
        .h2 {
            font-size: 20px;
        }
        .pageone a {
        }

        .link-board {
            max-width: 657px;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 0 15px;
        }
        .link-board > li {
            flex-basis: 47%;
            position: relative;
        }
        .link-board > .fluid {
            flex-basis: 100%;
            margin: 8px 0;
        }
            .link-board > li > div {
                display: block;
                width: 100%;
                padding-bottom: 75%;
                background-color: rgba(146, 146, 146, 0.54);
                position: relative;
            }
            .link-board > li > div > div,
            .link-board > li > div > a {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }
                .link-board .link-board-box-bg {
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: 140%;
                    opacity: 0;
                    transition: all 0.3s;
                }
                .link-board > li:hover .link-board-box-bg {
                    background-size: 120%;
                    opacity: 0.54;
                }
            .link-board > li > div > a > label {
                font-weight: lighter;
                font-size: 28px;
                letter-spacing: 15px;
                margin-right: -15px;
                color: #484848;
                color: #2b2b2b;
                cursor: pointer;
                font-size: 14px;
                letter-spacing: 6px;
            }

            #video-bg {
                position: absolute;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .link-board-container {
                display: none;
            }

            @media only screen and (min-width: 500px) {

                .link-board > li > div > a > label {
                    font-size: 20px;
                    letter-spacing: 10px;
                }

            }

            @media only screen and (min-width: 600px) {

                .link-board > li > div > a > label {
                    font-size: 28px;
                    letter-spacing: 15px;
                }

            }
    </style>
</head>

<body>
    <video id="video-bg" autoplay poster="assets/resources/images/turtle.jpg" onended="this.autoplay=false;this.load();">
        <source src="assets/resources/videos/homepage.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <nav class="link-board-container">
        <ul class="unbulleted link-board">
            <li><div>
                    <div class="link-board-box-bg" style="background-image: url('{!! helper_content(1, 'Button Image 1') !!}');"></div>
                    <a href="home.php"><label>RED<br/>SEA<br/>ONE</label></a>
                </div>
            </li>
            <li><div>
                    <!-- <div class="link-board-box-bg" style="background-image: url('{!! helper_content(1, 'Button Image 2') !!}');"></div> -->
                    <a href="schedule.php"><label>SCHEDULE</label></a>
                </div>
            </li>
            <li class="fluid">
                <h1 class="h1 center">EXPLORING THE RED SEA</h1>
            </li>
            <li><div>
                    <!-- <div class="link-board-box-bg" style="background-image: url('{!! helper_content(1, 'Button Image 3') !!}');"></div> -->
                    <a href="spots.php"><label>DIVE<br/>SPOTS</label></a>
                </div>
            </li>
            <li><div>
                    <!-- <div class="link-board-box-bg" style="background-image: url('{!! helper_content(1, 'Button Image 4') !!}');"></div> -->
                    <a href="gallery.php"><label>GALLERY</label></a>
                </div>
            </li>
        </ul>
    </nav>

    <script src="assets/resources/js/jquery.min.js"></script>
    <script src="assets/resources/js/velocity.min.js"></script>
    <script src="assets/resources/js/script.js"></script>
</body>
</html>