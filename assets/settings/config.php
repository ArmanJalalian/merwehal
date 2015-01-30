<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 14-1-2015
 * Time: 12:43
 */

//credentials for the database
$host = "localhost";
$user = "root";
$pass = "";
$database = "bowling";

//connect to the database
if($db = mysqli_connect($host, $user, $pass, $database)) {

    echo mysqli_error($db);

}

?>