<html>
<head>
    <meta charset="UTF-8">
    <title>Music Inc</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

    <script src="bootstrap-4.2/js/jquery.min.js"></script> <!--tag used to link with js-->
    <script src="bootstrap-4.2/js/popper.min.js"></script> <!--this order must be followed-->
    <script src="bootstrap-4.2/js/bootstrap.min.js"></script>
</head>

<body>
<!--Navbar section -->
    <nav class="navbar row navbar-expand-md justify-content-center bg-success navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="home.php">Music Inc</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse justify-content-center navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faqs.php">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
    <div class=" row sliding-pics">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators at the bottom of the image-->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
                <li data-target="#demo" data-slide-to="5"></li>
                <li data-target="#demo" data-slide-to="6"></li>
                <li data-target="#demo" data-slide-to="7"></li>
                <li data-target="#demo" data-slide-to="8"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="pictures/tough_man.jpg" alt="tough man">
                    <div class="carousel-caption">
                        <h3>Tough Man </h3>
                        <p>Fearless he is can beat the crap out of you!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="pictures/tough_elder.jpg" alt="elder">
                </div>
                <div class="carousel-item">
                    <img src="pictures/happy_mother.jpg" alt="happy mother">
                </div>
                <div class="carousel-item">
                    <img src="pictures/cool_warrior.jpg" alt="warrior">
                </div>
                <div class="carousel-item">
                    <img src="pictures/tough_girl.jpg" alt="warrior">
                </div>
                <div class="carousel-item">
                    <img src="pictures/fencing.jpg" alt="warrior">
                </div>
                <div class="carousel-item">
                    <img src="pictures/shisha.jpg" alt="warrior">
                </div>
                <div class="carousel-item">
                    <img src="pictures/tough_warrior.jpg" alt="warrior">
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

    </div>

<h2 class="text center">what you do</h2>
    <p>Well this is an innovative page whereby an individual can manupulate data and information.
        Currently the system is teaching the MIT COURSE and the students are enjoying.</p>
    <div class="row">
        <div class="col-sm-4">
            <h4>Motto</h4>
            <p>Live Long Stay Fresh</p>
        </div>
        <div class="col-sm-4">
            <h4>Mission</h4>
            <p>To enhance the current day time</p>
        </div>
        <div class="col-sm-4">
            <h4>Vision</h4>
            <p>To keep the fire burning</p>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.384987134765!2d36.800743!3d-1.264793!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fd3e7ccd9e69154!2seMobilis+Mobile+Technology+Training+Institute!5e0!3m2!1ssw!2ske!4v1549545326609" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    <div class="row">
        <div class="col-sm-3">
            <img src="pictures/fencing.jpg" data-target="#demo" data-toggle="collapse">
            <div id="demo" class="collapse">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>

    </div>

<body>
</html>
<?php
