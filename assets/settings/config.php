<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 14-1-2015
 * Time: 12:43
 */

//credentials for the database
$host = "sql.cmi.hro.nl";
$user = "0878531";
$pass = "62541e30";
$database = "0878531";

//connect to the database
if($db = mysqli_connect($host, $user, $pass, $database)) {

    echo mysqli_error($db);

}

?>