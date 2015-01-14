<?php

include("assets/settings/config.php");

if(isset($_POST['submit']))
{
    $name = ($_POST['Name']);
    $email = ($_POST['Email']);
    $date = ($_POST['Date']);
    $time = ($_POST['Time']);
    $lanes = ($_POST['Lanes']);
    $playTime = ($_POST['Playtime']);
    $kids = ($_POST['Kids']);
    $adults = ($_POST['Adults']);

    $reservation_query = "INSERT INTO reservation (reservation_name, reservation_email, reservation_date, reservation_time, reservation_lanes, reservation_playtime, reservation_kids, reservation_adults)
                          VALUES ('$name', '$email', '$date', '$time', '$lanes', '$playTime', '$kids', '$adults')";

    if($reservation_query != mysqli_query($db, $reservation_query))
    {
        echo mysqli_error($db);
    }
    else
    {
        $mailto = $email;
        $mailSubject = "Bowling Reservering";
        $mailMessage = "U heeft succesvol bij ons geboekt";
        $mailHeaders = "Verzonden door: Bowlingbaan de Merwehal";

        mail($mailto, $mailSubject, $mailMessage, $mailHeaders);

        echo "Succes!";
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
            <h1>Reserveren?</h1>
            <p>Wilt u een leuk dagje bowlen, reserveer dit dan zo snel mogelijk op deze pagina!</p>
        </div>
    </div>

    <div class="container">
        <div class="col-md-8">
            <form class="form-horizontal" role="form" method="post" action="reserve.php">
                <div class="form-group">
                    <label for="Name" class="col-sm-2 control-label">Naam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Name" name="Name" placeholder="Naam"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Date" class="col-sm-2 control-label">Datum</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="Date" name="Date" placeholder="Datum"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Time" class="col-sm-2 control-label">Tijd</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" id="Time" name="Time" placeholder="Tijd"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Lanes" class="col-sm-2 control-label">Aantal banen</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="Lanes" name="Lanes">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Playtime" class="col-sm-2 control-label">Speeltijd</label>
                    <div class="col-sm-10">
                        <input type="radio" class="radio-inline" id="Playtime" name="Playtime" placeholder="Speeltijd" value="1 uur"> 1 uur
                        <input type="radio" class="radio-inline" id="Playtime" name="Playtime" placeholder="Speeltijd" value="2 uur"> 2 uur
                        <input type="radio" class="radio-inline" id="Playtime" name="Playtime" placeholder="Speeltijd" value="3 uur"> 3 uur
                        <input type="radio" class="radio-inline" id="Playtime" name="Playtime" placeholder="Speeltijd" value="4 uur"> 4 uur
                    </div>
                </div>
                <div class="form-group">
                    <label for="Kids" class="col-sm-2 control-label">Aantal Kinderen</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="Kids" name="Kids">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Adults" class="col-sm-2 control-label">Aantal volwassenen</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="Adults" name="Adults">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Reserveer" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h3>Met dit formulier kan u reserveren voor een leuke avondje bowlen.</h3>
            <p>Zorg ervoor dat u alles goed invult!</p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    </body>
</html>
        