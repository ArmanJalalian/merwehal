<?php

include("assets/settings/config.php");

if(isset($_POST['submit'])) {

    $search = $_POST['search'];

    $search_query = "SELECT n.news_id, n.news_title, n.news_author, n.news_subject
                     FROM news n JOIN tags t
                     WHERE n.news_title LIKE '%".$search."%' OR
                     n.news_author LIKE '%".$search."%' OR
                     n.news_subject LIKE '%".$search."%' OR
                     t.tag_name LIKE '%".$search."%'";

    $search_result = $db->query($search_query);

    $results = [];

    if($search_result) {

        while($row = mysqli_fetch_array($search_result)) {

            $news_id = $row['news_id'];

            $results[] = array(
                'news_id' => $news_id
            );
        }
    }
}

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

    <?php include("assets/includes/navbar.php") ?>

    <div class="jumbotron">
        <div class="container">
            <h1>Zoek</h1>
            <p>Hieronder staan uw zoekresultaten:</p>
        </div>
    </div>

    <?php foreach($results as $item): ?>

        <p><?php echo $item['news_id']; ?></p>

    <?php endforeach; ?>
    
    </body>
</html>
        