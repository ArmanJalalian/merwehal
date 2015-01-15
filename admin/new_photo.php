<?php

include("../assets/settings/config.php");

include("../assets/settings/login_session.php");

$photo_query = "INSERT INTO photo (photo_title, photo_data) VALUES ('$title', '$data')";

?>
<!doctype html>
<html>
    <head>
        <title></title>
        <meta name = "description" content = ""/>
        <meta charset = "utf-8"/>
        <link rel= "stylesheet" href= "../assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../assets/css/jumbotron.css"/>
    </head>
    <body>

    <?php include("../assets/includes/admin_navbar.php"); ?>

    <div class="jumbotron">
        <div class="container">
            <h1>Nieuwe foto's!</h1>
            <p>Op deze pagina kunt u nieuwe foto's uploaden voor op de site!</p>
        </div>
    </div>

    <div class="container">
        <div class="col-md-8">
            <form class="form-horizontal" role="form" method="post" action="new_photo.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Image" class="col-sm-2 control-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="Image" name="Image" placeholder="Foto"/>
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
            <h3>Plaats nieuwe foto's</h3>
            <p>Zorg ervoor dat het pad naar de foto goed is!</p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>
        