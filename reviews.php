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
            <div class="review">
                <ul>
                    <li><span></span></li>
                    <li><p class="nameUser">LOREM IPSUM</p></li>
                    <li><p class="dateReview">03.11.2020 09:37</p></li>
                </ul>
                <p class="textReview">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos excepturi, hic consequatur id in ea quae officia, nostrum saepe perferendis vero beatae illum doloremque nulla. Eaque dolorem perspiciatis dolor facilis!</p>
            </div>
            <div class="review">
                <ul>
                    <li><span></span></li>
                    <li><p class="nameUser">LOREM IPSUM</p></li>
                    <li><p class="dateReview">03.11.2020 09:37</p></li>
                </ul>
                <p class="textReview">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos excepturi, hic consequatur id in ea quae officia, nostrum saepe perferendis vero beatae illum doloremque nulla. Eaque dolorem perspiciatis dolor facilis!</p>
            </div>
            <div class="review">
                <ul>
                    <li><span></span></li>
                    <li><p class="nameUser">LOREM IPSUM</p></li>
                    <li><p class="dateReview">03.11.2020 09:37</p></li>
                </ul>
                <p class="textReview">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos excepturi, hic consequatur id in ea quae officia, nostrum saepe perferendis vero beatae illum doloremque nulla. Eaque dolorem perspiciatis dolor facilis!</p>
            </div>
        </section>
        <section class="leaveReview">
            <form>
                <input type="text" class="name" name="nameUser" placeholder="Введите ФИО"></input>
                <textarea class="comment" name="reviewUser" placeholder="Оставьте свой отзыв о нас"></textarea>
                <input type="submit" name="button" class="sendComment"></input>
            </form>
        </section>
    </main>
    <? include "./resources/php/footer.php"; ?>
</body>
</html>