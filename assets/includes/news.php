<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 16-1-2015
 * Time: 11:50
 */

$news_query = "SELECT * FROM news";
$news_result = $db->query($news_query);

$news = [];

while($row = mysqli_fetch_array($news_result))
{
    $news_id = $row['news_id'];
    $news_title = $row['news_title'];
    $news_author = $row['news_author'];
    $news_subject = $row['news_subject'];
    $news_message = $row['news_message'];

    $news[] = array(
        'news_id' => $news_id,
        'news_title' => $news_title,
        'news_author' => $news_author,
        'news_subject' => $news_subject,
        'news_message' => $news_message
    );
}

?>