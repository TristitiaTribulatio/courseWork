<?
    session_start();
    require_once "connection.php";

    if(isset($_POST["button"])){
        $login = $_POST["name"];
        $password = $_POST["password"];
        $info = ($link -> query("SELECT * FROM `admin` WHERE `login` = '$login'")) -> fetch_assoc();
        if($info["password"] === $password){
            $_SESSION["name"] = $info["name"];
            header("Location: ../../adminPage.php");
        }
    }
?>