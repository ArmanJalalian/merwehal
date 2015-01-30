<?php

include("../assets/settings/config.php");

include("../assets/settings/login_session.php");

//check if user submitted the form
if(isset($_POST['submit'])) {

    //get all data form the form
    $photo_title = $_POST['Title'];
    $photo_data = $_FILES['Data']['name'];
    $photo_tmp = $_FILES['Data']['tmp_name'];
    //destination for the photo
    $data_destination = '../assets/images/';

    //move photo to correct folder and give it a name
    $move_data = move_uploaded_file($photo_tmp, $data_destination.$photo_data);
    //query to insert photo data in the right table
    $photo_query = "INSERT INTO photo (photo_title, photo_data) VALUES ('$photo_title', '$photo_data')";

    if($photo_query != mysqli_query($db, $photo_query)) {

        echo mysqli_error($db);

    } else {

        echo "De foto is goed geupload";

    }
}

?>
<!doctype html>
<html>
    <head>
        <title>Bowlingbaan de Merwehal: Admin</title>
        <meta name = "description" content = ""/>
        <meta charset = "utf-8"/>
        <link rel= "stylesheet" href= "../assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../assets/css/jumbotron.css"/>
    </head>
    <body>

    <?php include("../assets/includes/admin_navbar.php"); ?>

    <div class="jumbotron">
        <div class="container">
            <h1>Nieuwe foto's!</h1>
            <p>Op deze pagina kunt u nieuwe foto's uploaden voor op de site!</p>
        </div>
    </div>

    <div class="container">
        <div class="col-md-8">
            <form class="form-horizontal" role="form" method="post" action="new_photo.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Title" class="col-sm-2 control-label">Titel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Title" name="Title" placeholder="Titel"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Data" class="col-sm-2 control-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="Data" name="Data" placeholder="Foto"/>
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
            <h3>Plaats nieuwe foto's</h3>
            <p>Zorg ervoor dat het pad naar de foto goed is!</p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>
        