<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 16-1-2015
 * Time: 12:06
 */

include("../assets/settings/config.php");

//get the id of the photo that you want to delete
if(isset($_GET['id'])) {

    $delete_id = $_GET['id'];

    //query to select the corresponding photo by the id
    $select_photo = "SELECT photo_data FROM photo WHERE photo_id = '$delete_id'";
    //query to delete all photo data from the database
    $delete_query = "DELETE FROM photo WHERE photo_id = '$delete_id'";

    $data_result = $db->query($select_photo);
    $delete_result = $db->query($delete_query);

    //data array
    $data = [];

    while($row = mysqli_fetch_array($data_result)) {

        $photo_data = $row['photo_data'];

        $data = array(
            'photo_data' => $photo_data
        );
    }

    //delete the photo from the directory
    unlink("../assets/images/".$data['photo_data']);

   if(mysqli_query($db, $delete_query)) {

       header("Location: admin_gallery.php");

   } else {

       echo "Het verwijderen is niet goed gegaan! Probeer opnieuw!";

   }
}

?>