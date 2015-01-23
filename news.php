<?php

include("assets/settings/config.php");

include("assets/includes/news.php");

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
            <h1>Nieuws</h1>
            <p>Blijf op de hoogte van alles wat er om en rond de bowlingbaan gebeurt op deze pagina!</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach($news as $item): ?>
            <div class="col-md-4">
                <h2><?php echo $item['news_title']; ?></h2>
                <p><?php echo $item['news_author']; ?></p>
                <p><?php echo $item['news_subject']; ?></p>
                <a href="tag.php?id=<?php echo $item['tag_id']; ?>"><?php echo $item['news_tag'] ?></a>
                <a href="news_info.php?id=<?php echo $item['news_id']; ?>" class="btn btn-default">Lees verder</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    </body>
</html>
        