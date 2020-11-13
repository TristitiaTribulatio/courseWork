<?
    session_start();
    require_once "./resources/php/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reviews</title>
    <link rel="stylesheet" href="/resources/css/index.css">
    <link rel="stylesheet" href="/resources/css/header.css">
    <link rel="stylesheet" href="/resources/css/reviews.css">
    <link rel="stylesheet" href="/resources/css/footer.css">
</head>
<body>
    <? include "./resources/php/header.php"; ?>
    <main>
        <section class="reviews">
            <h2>REVIEWS</h2>
            <?
                $reviews = ($link -> query("SELECT * FROM `reviews` WHERE `status` = 2")) -> fetch_all(MYSQLI_ASSOC);
                foreach($reviews as $value){
            ?>
            <div class="review">
                <ul>
                    <li><span></span></li>
                    <li><p class="nameUser"><?= $value["nameUser"];?></p></li>
                    <li><p class="dateReview"><?= $value["date"];?></p></li>
                </ul>
                <p class="textReview"><?= $value["description"];?></p>
            </div>
            <?
                };
            ?>
        </section>
        <section class="leaveReview">
            <form method="POST" action="/resources/php/addReview.php">
                <input type="text" class="name" name="nameUser" placeholder="Введите ФИО" required></input>
                <textarea class="comment" name="description" placeholder="Оставьте свой отзыв о нас" required></textarea>
                <input type="submit" name="button" class="sendComment"></input>
            </form>
        </section>
    </main>
    <? include "./resources/php/footer.php"; ?>
    <script src="/resources/js/reviews.js"></script>
</body>
</html>