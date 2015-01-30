<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 16-1-2015
 * Time: 11:54
 */

//get the ID from the url
if(isset($_GET['id'])) {

    $id = $_GET['id'];

    //get the info from corresponding news item
    $edit_query = "SELECT * FROM news WHERE news_id = '$id'";
    $edit_result = $db->query($edit_query);

    //news array
    $news_info = [];


    while($row = mysqli_fetch_array($edit_result)) {

        $news_id = $row['news_id'];
        $news_title = $row['news_title'];
        $news_author = $row['news_author'];
        $news_subject = $row['news_subject'];
        $news_message = $row['news_message'];

        $news_info = array(
            'news_id' => $news_id,
            'news_title' => $news_title,
            'news_author' => $news_author,
            'news_subject' => $news_subject,
            'news_message' => $news_message
        );
    }
}

?>