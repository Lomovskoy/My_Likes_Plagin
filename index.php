<?php
    require_once("db/connect.php");
    require_once("models/articles_db.php");
    $link = db_connect();
    $articles = articles_all($link);
    include("views/articles_views.php");
?>
