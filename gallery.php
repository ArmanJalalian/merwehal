<?php

include("assets/settings/config.php");

include("assets/includes/photos.php");

?>
<!doctype html>
<html>
    <head>
        <title>Bowlingbaan de Merwehal</title>
        <meta name = "description" content = ""/>
        <meta charset = "utf-8"/>
        <link rel= "stylesheet" href= "assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/jumbotron.css"/>
        <link rel="stylesheet" href="assets/css/gallery.css"/>
    </head>
    <body>

    <?php include("assets/includes/navbar.php"); ?>

    <div class="jumbotron">
        <div class="container">
            <h1>Foto's</h1>
            <p>Op deze pagina komen alle foto's die er worden gemaakt door ons promoteam!</p>
        </div>
    </div>

    <div class="container">
        <ul class="row">
            <?php foreach($photos as $item): ?>
                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 crop">
                    <p><?php echo $item['photo_title']; ?></p>
                    <a data-toggle="modal" href="#myModal"> <img src="assets/images/<?php print $item['photo_data']; ?>"/> </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
        