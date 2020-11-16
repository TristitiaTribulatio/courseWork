<?
    session_start();
    require_once "connection.php";
    
    $idReview = $_GET["id"];
    if($idReview) {
        $link -> query("DELETE FROM `reviews` WHERE `id` = '$idReview'");
        header("Location: ../../reviews.php");
    }
?>