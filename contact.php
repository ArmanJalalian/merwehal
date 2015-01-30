<?php

$name = null;
$mail = null;
$subject = null;
$message = null;

$nameError = "";
$mailError = "";
$mailError2 = "";
$subjectError = "";
$messageError = "";

//check if user clicked submit button
if(isset($_POST['submit'])) {

    //check if name space is empty
    if(empty($_POST['Name'])) {

        $nameError = 'Je moet een naam invullen!';

    } else {

        $name = $_POST['Name'];

    }

    //check if the email adress is from the correct format
    if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {

        $mail = $_POST['Email'];

    }

    //check if subject space is empty
    if(empty($_POST['Subject'])) {

        $subjectError = 'Je moet een onderwerp invullen!';

    } else {

        $subject = $_POST['Subject'];

    }

    //check if message space is empty
    if(empty($_POST['Message'])) {

        $messageError = 'Je moet wel iets invullen!';

    } else {

        $message = $_POST['Message'];

    }

    mail($mail, $subject, $message, $name);
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
        <link rel="stylesheet" href="assets/css/maps.css"/>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9vVXIfybLGzrlItJCSI7KSnuB89erZ6c"></script>
    </head>
    <body>

    <?php include("assets/includes/navbar.php"); ?>

    <div class="jumbotron">
        <div class="container">
            <h1>Vragen?</h1>
            <p>Stel deze dan via dit formulier, we proberen ze zo snel mogelijk te beantwoorden!</p>
        </div>
    </div>

    <div class="container">
        <div class="col-md-8">
            <form class="form-horizontal" role="form" method="post" action="contact.php">
                <div class="form-group">
                    <label for="Name" class="col-sm-2 control-label">Naam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Name" name="Name" placeholder="Naam" value="<?php echo $name; ?>"/>
                        <span><?php echo $nameError; ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="<?php echo $mail; ?>"/>
                        <span><?php echo $mailError; ?></span>
                        <span><?php echo $mailError2; ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Subject" class="col-sm-2 control-label">Onderwerp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Subject" name="Subject" placeholder="Onderwerp" value="<?php echo $subject; ?>"/>
                        <span><?php echo $subjectError; ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Message" class="col-sm-2 control-label">Bericht</label>
                    <div class="col-sm-10">
                        <span><?php echo $messageError; ?></span>
                        <textarea class="form-control" rows="4" name="Message" id="Message">
                            <?php echo $message; ?>
                        </textarea>
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
            <h3>Contact Gegevens:</h3>
            <p>Baanhoekweg 1</p>
            <p>3313 LA Dordrecht</p>
            <p>Tel: 078-6164777</p>
        </div>
    </div>

    <div id="map-canvas"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/maps.js"></script>

    </body>
</html>
        