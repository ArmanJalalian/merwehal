<?php

?>
<!doctype html>
<html>
    <head>
        <title>Bowlingbaan de Merwehal</title>
        <meta name = "description" content = ""/>
        <meta charset = "utf-8"/>
        <link rel= "stylesheet" href= "assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/bootstrap-social.css"/>
        <link rel="stylesheet" href="assets/css/font-awesome.css"/>
        <link rel="stylesheet" href="assets/css/jumbotron.css"/>
        <link rel="stylesheet" href="assets/css/maps.css"/>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9vVXIfybLGzrlItJCSI7KSnuB89erZ6c"></script>
    </head>
    <body>

    <?php include("assets/includes/navbar.php"); ?>

    <div class="jumbotron">
        <div class="container">
            <h1>Welkom!</h1>
            <p>Bij het leukste bowlingcentrum van Zuid-Holland!</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Fun & Games</h2>
                <p>
                    Wist u dat als u een uurtje komt bowlen of een arrangement boekt, u gratis een muntje krijgt voor onze
                    fun en game spellen en op onze 25 meter lange indoor springkussen/stormbaan helemaal los kunt gaan?
                </p>
            </div>
            <div class="col-md-4">
                <h2>Arrangementen</h2>
                <p>
                    Bij ons kunt u terecht voor een leuk avondje bowlen, maar wil je het niet alleen bij bowlen laten dan
                    hebben wij een aantal arrangementen waar u veel voordeel mee opdoet. Wij doen bijvoorbeeld aan kinderfeestjes,
                    lady's night, high tea bowling, puntzak bowlen en saturday night fever bowlen!
                </p>
            </div>
            <div class="col-md-4">
                <h2>Volg ons</h2>
                <p>Wil je leuke kortingen krijgen en al het nieuws volgen? Like ons dan op Facebook!</p>
                <a href="https://www.facebook.com/pages/Bowling-de-Merwehal/156553314367224" class="btn btn-social-icon btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
            </div>
        </div>
    </div>

    <div id="map-canvas"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/maps.js"></script>
    </body>
</html>
        