<?php

include("../assets/settings/config.php");

include("../assets/settings/login_session.php");

include("../assets/includes/photos.php");

?>
<!doctype html>
<html>
    <head>
        <title></title>
        <meta name = "description" content = ""/>
        <meta charset = "utf-8"/>
        <link rel= "stylesheet" href= "../assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../assets/css/jumbotron.css"/>
        <link rel="stylesheet" href="../assets/css/gallery.css"/>
    </head>
    <body>

    <?php include("../assets/includes/admin_navbar.php"); ?>

    <div class="jumbotron">
        <div class="container">
            <h1>Foto's</h1>
            <p>Hieronder staan alle foto's</p>
        </div>
    </div>

    <div class="container">
        <ul class="row">
            <?php foreach($photos as $item): ?>
                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 crop">
                    <p><?php echo $item['photo_title']; ?></p>
                    <a href="delete_photo.php?id=<?php echo $item['photo_id']; ?>" class="btn btn-default">Verwijder</a>
                    <img src="../assets/images/<?php echo $item['photo_data']; ?>"/>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>
        