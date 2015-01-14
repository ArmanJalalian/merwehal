<?php

include("../assets/settings/config.php");

include("../assets/settings/login_session.php");

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
        <link rel= "stylesheet" href= "../assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../assets/css/jumbotron.css"/>
    </head>
    <body>

    <?php include("../assets/includes/admin_navbar.php"); ?>

    <div class="jumbotron">
        <div class="container">
            <h1>Nieuws</h1>
            <p>Hieronder staan alle nieuwsberichten</p>
        </div>
    </div>

    <div class="container">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Nummer</th>
                    <th>Titel</th>
                    <th>Auteur</th>
                    <th>Onderwerp</th>
                    <th>Bericht</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($news as $item): ?>
                <tr>
                    <td><?php echo $item['news_id']; ?></td>
                    <td><?php echo $item['news_title']; ?></td>
                    <td><?php echo $item['news_author']; ?></td>
                    <td><?php echo $item['news_subject']; ?></td>
                    <td><?php echo $item['news_message']; ?></td>
                    <td><a href="delete_news.php?id=<?php echo $item['news_id']; ?>">Verwijder</a></td>
                    <td><a href="edit_news.php?id=<?php echo $item['news_id']; ?>">Verander</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>
        