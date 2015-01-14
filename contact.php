<?php

?>
<!doctype html>
<html>
    <head>
        <title></title>
        <meta name = "description" content = ""/>
        <meta charset = "utf-8"/>
        <link rel= "stylesheet" href= "assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/jumbotron.css"/>
        <link rel="stylesheet" href="assets/css/maps.css"/>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9vVXIfybLGzrlItJCSI7KSnuB89erZ6c"></script>
    </head>
    <body>

    <?php include("assets/includes/navbar.php"); ?>

    <div class="jumbotron">
        <div class="container">
            <h1>Vragen?</h1>
            <p>Stel deze dan via dit formulier, we proberen ze zo snel mogelijk te beantwoorden!</p>
        </div>
    </div>

    <div class="container">
        <div class="col-md-8">
            <form class="form-horizontal" role="form" method="post" action="contact.php">
                <div class="form-group">
                    <label for="Name" class="col-sm-2 control-label">Naam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Name" name="Name" placeholder="Naam"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Subject" class="col-sm-2 control-label">Onderwerp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Subject" name="Subject" placeholder="Onderwerp"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Message" class="col-sm-2 control-label">Bericht</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="Message" id="Message"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Verzend" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h3>Contact Gegevens:</h3>
            <p>Baanhoekweg 1</p>
            <p>3313 LA Dordrecht</p>
            <p>Tel: 078-6164777</p>
        </div>
    </div>

    <div id="map-canvas"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/maps.js"></script>

    </body>
</html>
        