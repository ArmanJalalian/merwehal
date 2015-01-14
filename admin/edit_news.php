<?php

include("../assets/settings/config.php");

include("../assets/settings/login_session.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $edit_query = "SELECT * FROM news WHERE news_id = '$id'";
    $edit_result = $db->query($edit_query);

    $edit_news = [];

    while($row = mysqli_fetch_array($edit_result))
    {
        $news_id = $row['news_id'];
        $news_title = $row['news_title'];
        $news_author = $row['news_author'];
        $news_subject = $row['news_subject'];
        $news_message = $row['news_message'];

        $edit_news = array(
            'news_id' => $news_id,
            'news_title' => $news_title,
            'news_author' => $news_author,
            'news_subject' => $news_subject,
            'news_message' => $news_message
        );
    }
}

if(isset($_POST['submit']))
{
    $news_id = $_POST['id'];
    $news_title = $_POST['Title'];
    $news_author = $_POST['Author'];
    $news_subject = $_POST['Subject'];
    $news_message = $_POST['Message'];

    $edit_query = $db->prepare("UPDATE news SET news_title = ?, news_author = ?, news_subject = ?, news_message = ? WHERE news_id = ?");
    $edit_query->bind_param('ssssi',
        $news_title,
        $news_author,
        $news_subject,
        $news_message,
        $news_id);
    $edit_query->execute();

    if($edit_query != true)
    {
        echo mysqli_error($db);
    }
    else
    {
        echo "U heeft het nieuwsbericht succesvol veranderd!";
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
            <h1>Verander bericht</h1>
            <p>Verander het gekozen nieuwsbericht hieronder.</p>
        </div>
    </div>

    <div class="container">
        <div class="col-md-8">
            <form class="form-horizontal" role="form" method="post" action="edit_news.php">
                <div class="form-group">
                    <label for="Title" class="col-sm-2 control-label">Titel</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" value="<?php echo $news_id; ?>">
                        <input type="text" class="form-control" id="Title" name="Title" value="<?php echo $news_title; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Author" class="col-sm-2 control-label">Auteur</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Author" name="Author" value="<?php echo $news_author; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Subject" class="col-sm-2 control-label">Onderwerp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Subject" name="Subject" value="<?php echo $news_subject; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Message" class="col-sm-2 control-label">Bericht</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="Message" id="Message"><?php echo $news_message; ?></textarea>
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
            <h3>Verander nieuwsberichten</h3>
            <p>Het gekozen nieuwsbericht zie je hiernaast terug, waarna je het helemaal kan veranderen en opnieuw kan verzenden.</p>
        </div>
    </div>
    
    </body>
</html>
        