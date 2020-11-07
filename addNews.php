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
    <title>addNews</title>
    <link rel="stylesheet" href="/resources/css/index.css">
    <link rel="stylesheet" href="/resources/css/header.css">
    <link rel="stylesheet" href="/resources/css/addNews.css">
    <link rel="stylesheet" href="/resources/css/footer.css">
</head>
<body>
    <? include "./resources/php/header.php"; ?>
    <main>
        <section class="addNews">
            <h2>ДОБАВИТЬ НОВОСТЬ</h2>
            <form method="POST" action="/resources/php/addNews.php" enctype="multipart/form-data">
                <input type="text" name="title" placeholder="Введите заголовок новости"></input>
                <textarea name="description" placeholder="Введите текст новости"></textarea>
                <input type="file" name="img[]" accept=".jpg, .jpeg, .png"></input>
                <input type="submit" name="button" value="Опубликовать"></input>
            </form>
        </section>
    </main>
    <? include "./resources/php/footer.php"; ?>
</body>
</html>