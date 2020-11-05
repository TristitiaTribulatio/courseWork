<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mainPage</title>
    <link rel="stylesheet" href="/resources/css/index.css">
    <link rel="stylesheet" href="/resources/css/header.css">
    <link rel="stylesheet" href="/resources/css/mainPage.css">
    <link rel="stylesheet" href="/resources/css/footer.css">
</head>
<body>
    <? include "./resources/php/header.php"; ?>
    <main>
        <section class="aboutUs">
            <div class="aboutUsInfo">
                <h2><a href="aboutUs.php">ABOUT US</a></h2>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat incidunt suscipit dolor, inventore error eligendi deserunt perspiciatis sed ab explicabo minus esse consequatur possimus voluptatibus tempore aliquam culpa impedit eos.
                Facere aliquid alias, perspiciatis repellat commodi deleniti rem dolorem, rerum ipsa quo accusantium voluptatum eos nulla a sapiente tempore fugiat laboriosam in earum incidunt ad! Perferendis incidunt expedita nesciunt aliquid.
                Iure dicta amet placeat eligendi ipsum laudantium soluta labore autem assumenda, ad laboriosam beatae, earum repellat quia aut libero esse delectus. Nam quasi perspiciatis tenetur nemo sequi fugiat officiis laudantium!
                Quam eius facere dolor totam ut illum, ratione neque modi quas, odit aut animi asperiores, corporis quod! Sit cum eius officiis inventore maxime, excepturi, ullam illum voluptatem quam itaque eveniet?
                Sint maiores, molestias consequuntur minima quisquam earum officiis dolore expedita aspernatur quod facilis temporibus architecto officia veritatis nulla fugit mollitia consectetur. At aliquid cum dolores vitae impedit inventore, cupiditate reiciendis!
                </p>
            </div>
        </section>
        <section class="itemsMenu">
            <ul class="items">
                <li>
                    <a href="reviews.php">
                        <img src="/resources/imgs/reviewIcon.png">
                        <p>REVIEWS</p>
                    </a>
                </li>
                <li>
                    <a href="newsPage.php">
                        <img src="/resources/imgs/newsIcon.png">
                        <p>NEWS</p>
                    </a>
                </li>
                <li>
                    <a href="historyPage.php">
                        <img src="/resources/imgs/historyIcon.png">
                        <p>HISTORY</p>
                    </a>
                </li>
            </ul>
        </section>
        <section class="gallery">
            <ul class="imgs">
            </ul>
        </section>
        <? include "./resources/php/footer.php"; ?>
    </main>
</body>
</html>