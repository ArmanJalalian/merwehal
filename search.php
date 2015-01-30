<?php

include("assets/settings/config.php");

//check if user clicked submit button
if(isset($_POST['submit'])) {

    //get value from form
    $search = $_POST['search'];

    //query to look for items that contain the search word
    $search_query = "SELECT * FROM news n JOIN tags t
                     WHERE t.tag_id = n.tags_tag_id AND
                     n.news_title LIKE '%".$search."%' OR
                     t.tag_name LIKE '%".$search."%'";

    $search_result = $db->query($search_query);

    //results array
    $results = [];

    if($search_result) {

        while($row = mysqli_fetch_array($search_result)) {

            $news_id = $row['news_id'];
            $news_title = $row['news_title'];
            $tags_id = $row['tag_id'];
            $tags_name = $row['tag_name'];

            $results[] = array(
                'news_id' => $news_id,
                'news_title' => $news_title,
                'tags_id' => $tags_id,
                'tags_name' => $tags_name
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

    <div class="container">

        <?php if(isset($results) && count($results) > 0): ?>

            <?php foreach($results as $item): ?>

                <p><?php echo $item['news_title']; ?></p>
                <a href="news_info.php?id=<?php echo $item['news_id']; ?>" class="btn btn-default">Lees verder...</a>

            <?php endforeach; ?>

        <?php elseif(isset($results) && count($results) == 0): ?>

            <p>Er is niks gevonden, probeer het opnieuw!</p>

        <?php else: ?>

            <p>Je moet wel een zoek opdracht opgeven!</p>

        <?php endif ?>

    </div>
    
    </body>
</html>
        