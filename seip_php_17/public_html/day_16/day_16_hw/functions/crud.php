<?php

function insertNews($news_title, $news_reporter, $news_description, $news_status){
    $sql = "INSERT INTO tbl_news (news_title, news_reporter, news_description, news_status)
                VALUES ('$news_title', '$news_reporter', '$news_description', '$news_status')";

    return $sql;
}

function index(){
    $sql = "SELECT * FROM tbl_news";
    return $sql;
}