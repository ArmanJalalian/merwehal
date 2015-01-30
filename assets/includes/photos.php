<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 16-1-2015
 * Time: 11:37
 */

//query to get all photos
$photo_query = "SELECT * FROM photo";
$photo_result = $db->query($photo_query);

//photos array
$photos = [];

while($row = mysqli_fetch_array($photo_result)) {

    $photo_id = $row['photo_id'];
    $photo_title = $row['photo_title'];
    $photo_data = $row['photo_data'];

    $photos[] = array(
        'photo_id' => $photo_id,
        'photo_title' => $photo_title,
        'photo_data' => $photo_data
    );
}

?>