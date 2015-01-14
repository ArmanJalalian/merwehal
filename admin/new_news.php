<?php

include("../assets/settings/config.php");

include("../assets/settings/login_session.php");

if(isset($_POST['submit']))
{
    $title = ($_POST['Title']);
    $author = ($_POST['Author']);
    $message = ($_POST['Message']);
    $subject = ($_POST['Subject']);

    $news_query = "INSERT INTO news (news_title, news_author, news_subject, news_message) VALUES ('$title', '$author', '$subject', '$message')";

    if($news_query != mysqli_query($db, $news_query))
    {
        echo mysqli_error($db);
    }
    else
    {
        echo "Succes";
    }
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
            <p>Op deze pagina kunt u nieuwsberichten posten voor op de site.</p>
        </div>
    </div>

    <div class="container">
        <div class="col-md-8">
            <form class="form-horizontal" role="form" method="post" action="new_news.php">
                <div class="form-group">
                    <label for="Title" class="col-sm-2 control-label">Titel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Title" name="Title" placeholder="Titel"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Author" class="col-sm-2 control-label">Auteur</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Author" name="Author" placeholder="Auteur"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Subject" class="col-sm-2 control-label">Onderwerp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Subject" name="Subject" placeholder="Onderwerp"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Message" class="col-sm-2 control-label">Bericht</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="Message" id="Message"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Verzend" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h3>Plaats een nieuwsbericht:</h3>
            <p>Zorg ervoor dat alle velden goed zijn ingevuld!</p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>
        