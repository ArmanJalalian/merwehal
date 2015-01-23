<?php

include("assets/settings/config.php");

if(isset($_GET['id'])) {

    $tag_id = $_GET['id'];

    $tag_query = "SELECT n.news_id, n.news_title, t.tag_name FROM news n JOIN tags t
                  WHERE n.tags_tag_id = t.tag_id AND t.tag_id = '$tag_id'";

    $tag_result = $db->query($tag_query);

    $news_items = [];

    while($row = mysqli_fetch_array($tag_result)) {

        $tag_name = $row['tag_name'];
        $news_id = $row['news_id'];
        $news_title = $row['news_title'];

        $news_items[] = array(
            'tag_name' => $tag_name,
            'news_id' => $news_id,
            'news_title' => $news_title
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
            <h1><?php echo $tag_name; ?></h1>
            <p>Hieronder staan alle news items die bij deze tag horen:</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach($news_items as $item): ?>
                <div class="col-md-4">
                    <h2><?php echo $item['news_title']; ?></h2>
                    <a href="news_info.php?id=<?php echo $item['news_id']; ?>" class="btn btn-default">Lees verder</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    </body>
</html>
        