<?
    session_start();
    require_once "connection.php";
    
    $idNews = $_GET["id"];
    $img = $_GET["img"];
    if($idNews) {
        $link -> query("DELETE FROM `news` WHERE `id` = '$idNews'");
        unlink(dirname(__DIR__)."/imgs/news/".$img);
        header("Location: ../../newsPage.php");
    }
?>