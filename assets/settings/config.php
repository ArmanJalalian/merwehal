<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 14-1-2015
 * Time: 12:43
 */

$host = "localhost";
$user = "root";
$pass = "";
$database = "bowling";

if($db = mysqli_connect($host, $user, $pass, $database)) {

    echo mysqli_error($db);

}

?>