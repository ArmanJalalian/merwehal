<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 14-1-2015
 * Time: 12:42
 */

include("../assets/settings/config.php");

session_destroy();

header('Location: login.php');

exit;

?>