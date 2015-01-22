<?php

include("assets/settings/config.php");

include("assets/includes/get_news.php");

?>
<!doctype html>
<html>
    <head>
        <title>Bowlingbaan de Merwehal</title>
        <meta name = "description" content = ""/>
        <meta charset = "utf-8"/>
        <link rel= "stylesheet" href= "assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/jumbotron.css"/>
    </head>
    <body>

    <?php include("assets/includes/navbar.php"); ?>

    <div class="jumbotron">
        <div class="container">
            <h1><?php echo $news_info['news_title']; ?></h1>
            <p><?php echo $news_info['news_subject']; ?></p>
        </div>
    </div>

    <div class="container">
        <h2><?php echo $news_info['news_author']; ?></h2>
        <p><?php echo $news_info['news_message']; ?></p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
        