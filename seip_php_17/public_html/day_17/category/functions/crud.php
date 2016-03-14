<?php

function insertNews($news_title, $news_reporter, $news_description, $news_status){
    $sql = "INSERT INTO tbl_news (news_title, news_reporter, news_description, news_status)
                VALUES ('$news_title', '$news_reporter', '$news_description', '$news_status')";
    return $sql;
}

function index(){
    $sql = "SELECT * FROM tbl_news WHERE NEWS_STATUS=1";
    return $sql;
}

function update($newsID){
    $sql = "SELECT * FROM tbl_news WHERE id=$newsID";
    return $sql;
}

function updateSave($news_id, $news_title, $news_reporter, $news_description, $news_status){
    $sql = "UPDATE tbl_news SET news_title='$news_title',"
            . "news_reporter='$news_reporter',"
            . "news_description='$news_description',"
            . "news_status='$news_status'  "
            . "WHERE id=$news_id";
    return $sql;
}
function delete($news_id){
    // sql to delete a record
    $sql = "DELETE FROM tbl_news WHERE id=$news_id";
    return $sql;
}
