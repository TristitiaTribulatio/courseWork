<?
    session_start();
    if(empty($_SESSION["name"])){
        header("Location: adminLogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminPage</title>
    <link rel="stylesheet" href="/resources/css/index.css">
    <link rel="stylesheet" href="/resources/css/header.css">
    <link rel="stylesheet" href="/resources/css/adminPage.css">
    <link rel="stylesheet" href="/resources/css/footer.css">
</head>
<body>
    <? include "./resources/php/header.php"; ?>
    <? include "./resources/php/footer.php"; ?>
    <script src="/resources/js/adminPage.js"></script>
</body>
</html>