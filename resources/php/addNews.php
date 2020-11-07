<?
    session_start();
    require_once "connection.php";

    if(isset($_POST["button"])){
        $title = $_POST["title"];
        $description = $_POST["description"];
        $date = date("Y-m-j h:i:s");
        $img = $_FILES["img"];
        move_uploaded_file($img["tmp_name"][0], dirname(__DIR__)."/imgs/news/".$img["name"][0]);
        $query = $link -> query("INSERT INTO `news` VALUES (NULL, '$title', '$description', '$date', '{$img["name"][0]}')");
        header("Location: ../../addNews.php");
    }
?>