<?
    session_start();
    require_once "./resources/php/connection.php";

    if(empty($_SESSION["name"])){
        header("Location: adminLogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>controlReviews</title>
    <link rel="stylesheet" href="/resources/css/index.css">
    <link rel="stylesheet" href="/resources/css/header.css">
    <link rel="stylesheet" href="/resources/css/controlReviews.css">
    <link rel="stylesheet" href="/resources/css/footer.css">
</head>
<body>
    <? include "./resources/php/header.php"; ?>
    <main>
        <section class="controlReviews">
            <h2>КОНТРОЛЬ ОТЗЫВОВ</h2>
            <?
                $reviews = ($link -> query("SELECT * FROM `reviews` WHERE `status` = 1")) -> fetch_all(MYSQLI_ASSOC);
                foreach($reviews as $value){
            ?>
            <form class="review">
                <ul class="info">
                    <li><span></span></li>
                    <li><p class="nameUser"><?= $value["nameUser"];?></p></li>
                    <li><p class="dateReview"><?= $value["date"];?></p></li>
                </ul>
                <p class="description"><?= $value["description"];?></p>
                <ul class="controlPanel">
                    <li><a href="./resources/php/controlReview.php?id=<?= $value['id']; ?>&reviewStatus=2">ПРИНЯТЬ</a></li>
                    <li><a href="./resources/php/controlReview.php?id=<?= $value['id']; ?>&reviewStatus=3">ОТКЛОНИТЬ</a></li>
                </ul>
            </form>
            <?
                };
            ?>
        </section>
    </main>
    <? include "./resources/php/footer.php"; ?>
</body>
</html>