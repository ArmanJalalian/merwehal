<?php

include("assets/settings/config.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $news_query = "SELECT * FROM news WHERE news_id = '$id'";
    $news_result = $db->query($news_query);

    $news_info = [];

    while($row = mysqli_fetch_array($news_result))
    {
        $news_id = $row['news_id'];
        $news_title = $row['news_title'];
        $news_author = $row['news_author'];
        $news_subject = $row['news_subject'];
        $news_message = $row['news_message'];

        $news_info = array(
            'news_id' => $news_id,
            'news_title' => $news_title,
            'news_author' => $news_author,
            'news_subject' => $news_subject,
            'news_message' => $news_message
        );
    }
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
        