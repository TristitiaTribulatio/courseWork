<?
    require_once "connection.php";

    $button = $_POST["button"];
    if(isset($button)){
        $nameUser = $_POST["nameUser"];
        $description = $_POST["description"];
        $date = date("Y-m-j h:i:s");
        $link -> query("INSERT INTO `reviews` VALUES (NULL, '$nameUser', '$description', '$date', 1)");
        header("Location: ../../reviews.php");
    }
?>