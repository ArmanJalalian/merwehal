<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 14-1-2015
 * Time: 15:17
 */

session_start();

//check if the session still exists
if(!isset($_SESSION['username'])) {

    header('Location: login.php');

}

?>