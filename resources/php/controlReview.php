<?php
    session_start();
    require_once "connection.php";

    $idReview = (int) $_GET['id'];
    $reviewStatus = (int) $_GET['reviewStatus'];
    if($reviewStatus === 2){
        $link -> query("UPDATE `reviews` SET `status` = 2 WHERE `id` = {$idReview}");
    } else {
        $link -> query("UPDATE `reviews` SET `status` = 3 WHERE `id` = {$idReview}");
    }
    header("Location: ../../controlReviews.php");
?>