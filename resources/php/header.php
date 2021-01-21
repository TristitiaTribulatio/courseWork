<header>
    <section class="header">
        <a href="/index.php" class="logo"><img src="/resources/imgs/logo.png"></a>
        <a href="
        <?
            if(empty($_SESSION["name"])){
                echo "/index.php";
            } else {
                echo "/adminPage.php";
            }
        ?>
        " class="title"><h1>nameOfCollege</h1></a>
        <ul class="links">
            <li><a href="#"><img src="/resources/imgs/link1.png"></a></li>
            <li><a href="#"><img src="/resources/imgs/link1.png"></a></li>
            <li><a href="#"><img src="/resources/imgs/link1.png"></a></li>
            <li><a href="#"><img src="/resources/imgs/link1.png"></a></li>
        </ul>
        <? if(empty($_SESSION["name"])){ ?>
                <a href="adminLogin.php" class="adminLog"><img src="/resources/imgs/adminLog.png"></a>
        <? } else { ?>
                <a href="/resources/php/logout.php" class="adminLog"><img src="/resources/imgs/logout.png"></a>
        <? } ?>
    </section>
</header>
<nav>
    <section class="nav">
        <ul class="navMenu">
            <li class="navItem A">
                <a href="/index.php">about college</a>
                <ul class="aboutMenu">
                    <li><a href="aboutUs.php">about us</a></li>
                    <li><a href="historyPage.php">history</a></li>
                    <li><a href="newsPage.php">news</a></li>
                    <li><a href="reviews.php">reviews</a></li>
                </ul>
            </li>
            <li class="navItem E">
                <a href="#">education</a>
                <ul class="education">
                    <li><a href="#">applicants</a></li>
                    <li><a href="#">students</a></li>
                </ul>
            </li>
            <li class="navItem C"><a href="contacts.php">contacts</a></li>
        </ul>
    </section>
</nav>