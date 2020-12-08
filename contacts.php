<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacts</title>
    <link rel="stylesheet" href="/resources/css/index.css">
    <link rel="stylesheet" href="/resources/css/header.css">
    <link rel="stylesheet" href="/resources/css/contacts.css">
    <link rel="stylesheet" href="/resources/css/footer.css">
</head>
<body>
    <? include "./resources/php/header.php"; ?>
    <main>
        <section class="contacts">
            <div class="info">
                <h2> КОНТАКТЫ </h2>
                <ul class="infoMain">
                    <li class="per1">
                        <ul>
                            <li class="position">Директор: Иванов Иван Иванович</li>
                            <li>college@college.com</li>
                            <li>+7(999)999-99-99</li>
                        </ul>
                    </li>
                    <li class="per2">
                        <ul>
                            <li class="position">Зам. директора: Иванов Иван Иванович</li>
                            <li>college@college.com</li>
                            <li>+7(999)999-99-99</li>
                        </ul>
                    </li>
                    <li class="otherInfo">
                        <ul>
                            <li>
                                <img src="/resources/imgs/phoneIcon.png">
                                <p>+7(999)999-99-99</p>
                            </li>
                            <li>
                                <img src="/resources/imgs/phoneIcon.png">
                                <p>+7(888)888-88-88</p>
                            </li>
                            <li>
                                <img src="/resources/imgs/mailIcon.png">
                                <p>college@college.com</p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="mapInfo">
                <h2>КАК ДО НАС ДОБРАТЬСЯ?</h2>
                <iframe src="https://yandex.ru/map-widget/v1/-/CCUE5Ohd9A" frameborder="1" allowfullscreen="true" class='map'></iframe>
            </div>
        </section>
    </main>
    <? include "./resources/php/footer.php"; ?>
</body>
</html>