<?php

include("../assets/settings/config.php");

include("../assets/settings/login_session.php");

?>
<!doctype html>
<html>
    <head>
        <title>Bowlingbaan de Merwehal: Admin</title>
        <meta name = "description" content = ""/>
        <meta charset = "utf-8"/>
        <link rel= "stylesheet" href= "../assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../assets/css/jumbotron.css"/>
    </head>
    <body>

    <?php include("../assets/includes/admin_navbar.php"); ?>

    <div class="jumbotron">
        <div class="container">
            <h1>Welkom Admin!</h1>
            <p>Kies hieronder wat u wilt doen: </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Nieuws</h2>
                <p>Hier kunt u nieuws berichten aanmaken of oudere nieuwsberichten aanpassen.</p>
                <a href="admin_news.php" class="btn btn-default">Zie al het nieuws</a>
                <a href="new_news.php" class="btn btn-default">Maak een nieuw bericht</a>
            </div>
            <div class="col-md-4">
                <h2>Foto's</h2>
                <p>Op deze pagina kan u nieuwe foto's uploaden naar de website.</p>
                <a href="admin_gallery.php" class="btn btn-default">Zie alle foto's</a>
                <a href="new_photo.php" class="btn btn-default">Upload nieuwe foto's</a>
            </div>
            <div class="col-md-4">
                <h2>Reserveringen</h2>
                <p>Hier komen alle reserveringen van klanten in te staan.</p>
                <a href="admin_reserve.php" class="btn btn-default">Zie alle reserveringen</a>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>
        