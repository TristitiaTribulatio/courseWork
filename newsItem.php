<?
    session_start();
    require_once "./resources/php/connection.php";

    $id = $_GET["id"];
    if(empty($id)){
        header("Location: newsPage.php");
    } else {
        $newsItem = ($link -> query("SELECT * FROM `news` WHERE `id` = $id")) -> fetch_assoc();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newsItem</title>
    <link rel="stylesheet" href="/resources/css/index.css">
    <link rel="stylesheet" href="/resources/css/header.css">
    <link rel="stylesheet" href="/resources/css/newsItem.css">
    <link rel="stylesheet" href="/resources/css/footer.css">
</head>
<body>
    <? include "./resources/php/header.php"; ?>
    <main>
        <section class="newsItem">
            
            <div class="title">
                <img src="/resources/imgs/news/<?= $newsItem["nameFile"]; ?>" class="img">
                <h2><?= $newsItem["name"]; ?></h2>
                <p class="date"><?= $newsItem["date"]; ?></p>
            </div>
            <p class="text"><?= $newsItem["description"]; ?></p>
        </section>
    </main>
    <? include "./resources/php/footer.php"; ?>
</body>
</html>