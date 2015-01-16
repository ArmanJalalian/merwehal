<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 16-1-2015
 * Time: 15:58
 */

$tag_query = "SELECT * FROM tags";
$tag_result = $db->query($tag_query);

$tags = [];

while($row = mysqli_fetch_array($tag_result))
{
    $tag_id = $row['tag_id'];
    $tag_name = $row['tag_name'];

    $tags[] = array(
        'tag_id' => $tag_id,
        'tag_name' => $tag_name
    );
}

?>