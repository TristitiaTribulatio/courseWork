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
    <main>
        <section class="adminPanel">
            <h2>Вы авторизированы, как <?= $_SESSION["name"]; ?></h2>
            <ul>
                <li><a href="/resources/php/controlReviews.php">КОНТРОЛЬ ОТЗЫВОВ</a></li>
                <li><a href="/resources/php/addNews.php">ДОБАВИТЬ НОВОСТЬ</a></li>
            </ul>
        </section>
    </main>
    <? include "./resources/php/footer.php"; ?>
    <script src="/resources/js/adminPage.js"></script>
</body>
</html>