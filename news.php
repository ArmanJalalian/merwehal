<?php

include("assets/settings/config.php");

$news_query = "SELECT * FROM news";
$news_result = $db->query($news_query);

$news = [];

while($row = mysqli_fetch_array($news_result))
{
    $news_id = $row['news_id'];
    $news_title = $row['news_title'];
    $news_author = $row['news_author'];
    $news_subject = $row['news_subject'];
    $news_message = $row['news_message'];

    $news[] = array(
        'news_id' => $news_id,
        'news_title' => $news_title,
        'news_author' => $news_author,
        'news_subject' => $news_subject,
        'news_message' => $news_message
    );
}

?>
<!doctype html>
<html>
    <head>
        <title></title>
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
                <h3><?php echo $item['news_author']; ?></h3>
                <h4><?php echo $item['news_subject']; ?></h4>
                <p><?php echo $item['news_message'] ?></p>
                <a href="news_info.php?id=<?php echo $item['news_id']; ?>" class="btn btn-default">Lees verder</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    </body>
</html>
        