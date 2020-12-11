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
                <h2><?= $newsItem["name"]; ?></h2>
                <p class="date"><?= $newsItem["date"]; ?></p>
            </div>
            <p class="text">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime dolorem et nisi accusantium tempora, omnis dolorum. Eum sed earum nulla, at minus temporibus harum dolore quisquam voluptates unde molestiae adipisci.
            Dolorum error atque aut odit, assumenda et soluta rerum officiis beatae ullam quidem. Itaque in accusantium reiciendis voluptatibus voluptatem, quas eum, voluptatum cupiditate debitis, ipsam veniam perferendis earum ipsum omnis.
            Repellat fugit eius, numquam nobis officiis illum temporibus est eaque aliquam, doloremque totam reprehenderit sit maxime soluta at laboriosam ullam perferendis laborum fuga unde tenetur. Rerum rem voluptate fuga necessitatibus.
            </p>
            <img src="/resources/imgs/news/<?= $newsItem["nameFile"]; ?>" class="img">
            <p class="text">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime dolorem et nisi accusantium tempora, omnis dolorum. Eum sed earum nulla, at minus temporibus harum dolore quisquam voluptates unde molestiae adipisci.
            Dolorum error atque aut odit, assumenda et soluta rerum officiis beatae ullam quidem. Itaque in accusantium reiciendis voluptatibus voluptatem, quas eum, voluptatum cupiditate debitis, ipsam veniam perferendis earum ipsum omnis.
            Repellat fugit eius, numquam nobis officiis illum temporibus est eaque aliquam, doloremque totam reprehenderit sit maxime soluta at laboriosam ullam perferendis laborum fuga unde tenetur. Rerum rem voluptate fuga necessitatibus.
            </p>
        </section>
    </main>
    <? include "./resources/php/footer.php"; ?>
</body>
</html>