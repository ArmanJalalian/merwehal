<?php

include("../assets/settings/config.php");

include("../assets/settings/login_session.php");

$reservation_query = "SELECT * FROM reservation WHERE reservation_date > NOW()";
$result = $db->query($reservation_query);

$reservation = [];

while($row = mysqli_fetch_array($result)) {

    $reservation_id = $row['reservation_id'];
    $reservation_name = $row['reservation_name'];
    $reservation_email = $row['reservation_email'];
    $reservation_date = $row['reservation_date'];
    $reservation_time = $row['reservation_time'];
    $reservation_lanes = $row['reservation_lanes'];
    $reservation_playtime = $row['reservation_playtime'];
    $reservation_kids = $row['reservation_kids'];
    $reservation_adults = $row['reservation_adults'];

    $reservation[] = array(
        'reservation_id' => $reservation_id,
        'reservation_name' => $reservation_name,
        'reservation_email' => $reservation_email,
        'reservation_date' => $reservation_date,
        'reservation_time' => $reservation_time,
        'reservation_lanes' => $reservation_lanes,
        'reservation_playtime' => $reservation_playtime,
        'reservation_kids' => $reservation_kids,
        'reservation_adults' => $reservation_adults
    );

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
            <h1>Reserveringen</h1>
            <p>Hieronder staan alle reserveringen die er zijn gemaakt.</p>
        </div>
    </div>

    <div class="container">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Nummer</th>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Datum</th>
                    <th>Tijd</th>
                    <th>Banen</th>
                    <th>Speeltijd</th>
                    <th>Kinderen</th>
                    <th>Ouderen</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($reservation as $item): ?>
                <tr>
                    <td><?php echo $item['reservation_id']; ?></td>
                    <td><?php echo $item['reservation_name']; ?></td>
                    <td><?php echo $item['reservation_email']; ?></td>
                    <td><?php echo $item['reservation_date']; ?></td>
                    <td><?php echo $item['reservation_time']; ?></td>
                    <td><?php echo $item['reservation_lanes']; ?></td>
                    <td><?php echo $item['reservation_playtime']; ?></td>
                    <td><?php echo $item['reservation_kids']; ?></td>
                    <td><?php echo $item['reservation_adults']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    </body>
</html>
        