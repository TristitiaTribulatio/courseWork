<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminPage</title>
    <link rel="stylesheet" href="/resources/css/index.css">
    <link rel="stylesheet" href="/resources/css/header.css">
    <link rel="stylesheet" href="/resources/css/adminLogin.css">
    <link rel="stylesheet" href="/resources/css/footer.css">
</head>
<body>
    <? include "./resources/php/header.php"; ?>
    <main>
        <section class="adminLogin">
            <form method="POST" action="./resources/php/log.php">
                <input type="text" name="name" placeholder="Введите Ваш логин"></input>
                <input type="password" name="password" placeholder="Введите Ваш пароль"></input>
                <input type="submit" name="button" value="Авторизироваться"></input>
            </form>
        </section>
    </main>
    <? include "./resources/php/footer.php"; ?>
</body>
</html>