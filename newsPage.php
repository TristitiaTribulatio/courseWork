<?
    session_start();
    require_once "./resources/php/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newsPage</title>
    <link rel="stylesheet" href="/resources/css/index.css">
    <link rel="stylesheet" href="/resources/css/header.css">
    <link rel="stylesheet" href="/resources/css/newsPage.css">
    <link rel="stylesheet" href="/resources/css/footer.css">
</head>
<body>
    <? include "./resources/php/header.php"; ?>
    <main>
        <section class="news">
            <h2><a href="#">NEWS</a></h2>
            <ul>
                <?
                    $news = ($link -> query("SELECT * FROM `news`")) -> fetch_all(MYSQLI_ASSOC);
                    foreach($news as $value){
                ?>
                <li style="background-image: url('/resources/imgs/news/<?= $value["nameFile"]; ?>');">
                    <div class="newsInfo">
                        <h3><a href="#"><?= $value["name"];?></a></h3>
                        <p><?= $value["description"];?></p>
                    </div>
                </li>
                <?
                    };
                ?>
            </ul>
        </section>
    </main>
    <? include "./resources/php/footer.php"; ?>
</body>
</html>