<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 16-1-2015
 * Time: 11:50
 */

//query to get all news items
$news_query = "SELECT * FROM news JOIN tags WHERE tags_tag_id = tag_id";

$news_result = $db->query($news_query);

//news array
$news = [];

while($row = mysqli_fetch_array($news_result)) {

    $news_id = $row['news_id'];
    $news_title = $row['news_title'];
    $news_author = $row['news_author'];
    $news_subject = $row['news_subject'];
    $news_message = $row['news_message'];
    $tag_id = $row['tag_id'];
    $news_tag = $row['tag_name'];

    $news[] = array(
        'news_id' => $news_id,
        'news_title' => $news_title,
        'news_author' => $news_author,
        'news_subject' => $news_subject,
        'news_message' => $news_message,
        'tag_id' => $tag_id,
        'news_tag' => $news_tag
    );
}

?>