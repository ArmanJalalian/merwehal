<?php

$photo_query = "SELECT * FROM photo";

?>
<!doctype html>
<html>
    <head>
        <title></title>
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
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 crop">
                <a data-toggle="modal" href="#myModal"> <img src="assets/images/Screenshot%20(1).png"/> </a>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 crop">
                <img src="assets/images/Screenshot%20(1).png"/>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 crop">
                <img src="assets/images/Screenshot%20(1).png"/>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 crop">
                <img src="assets/images/Screenshot%20(1).png"/>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 crop">
                <img src="assets/images/Screenshot%20(1).png"/>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 crop">
                <img src="assets/images/Screenshot%20(1).png"/>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 crop">
                <img src="assets/images/Screenshot%20(1).png"/>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 crop">
                <img src="assets/images/Screenshot%20(1).png"/>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 crop">
                <img src="assets/images/Screenshot%20(1).png"/>
            </li>
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
        