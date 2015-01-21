<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 14-1-2015
 * Time: 15:17
 */

session_start();

if(!isset($_SESSION['username'])) {

    header('Location: login.php');

}

?>