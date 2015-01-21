<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 14-1-2015
 * Time: 15:12
 */

include("../assets/settings/config.php");

include("../assets/settings/login_session.php");

if(isset($_GET['id'])) {

    $delete_id = $_GET['id'];

    $delete_query = "DELETE FROM news WHERE news_id = '$delete_id'";
    $delete_result = $db->query($delete_query);

    if(mysqli_query($db, $delete_query)) {

        header('Location: admin_news.php');

    } else {

        echo "Het verwijderen is niet goed gegaan! Probeer opnieuw!";

    }
}

?>