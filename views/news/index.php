<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webimpacto</title>
    <link rel="stylesheet" href="../template/css/reset.css">
    <link rel="stylesheet" href="../template/css/style.css">
    <link rel="shortcut icon" href="../template/images/favicon.png" type="image/x-icon">
</head>
<body>
    <header class="wrapper">
        <img src="../template/images/impacto-logo.png" alt="Webimpacto" class="logo">
        <ul class="nav">
            <li class="cumber-bread noselect"></li>
            <li class="nav__link">
                <a href="#">About us</a>
            </li>
            <li class="cumber-bread noselect"></li>
            <li class="nav__link">
                <a href="#">Products</a>
            </li>
            <li class="cumber-bread noselect"></li>
            <li class="nav__link">
                <a href="#">Services</a>
            </li>
            <li class="cumber-bread noselect"></li>
            <li class="nav__link">
                <a href="#">News</a>
            </li>
            <li class="cumber-bread noselect"></li>
            <li class="nav__link">
                <a href="#">Contacts</a>
            </li>
            <li class="cumber-bread noselect"></li>
        </ul>
    </header>
    <main class="wrapper">
        <p class="heading">
            <h2 class="title">News</h2>
            <ul class="pagination">
                <li class="start"></li>
                <li class="previous"></li>
                <li class="">1</li>
                <li class="">2</li>
                <li class="">3</li>
                <li class="">4</li>
                <li class="">5</li>
                <li class="">6</li>
                <li class="">7</li>
                <li class="next"></li>
                <li class="end"></li>
            </ul>
        </p>
        <div class="news">
            <?php foreach ($newsList as $newsItem):?>
                <div class="news__item">
                    <img src="<?php echo $newsItem['preview'];?>" alt="News item image" class="news__item--img">
                    <p class="news__item--heading">
                        <a href="/news/<?php echo $newsItem['id'];?>">
                            <h3 class="news__item--title">
                                <?php echo $newsItem['title'];?>
                            </h3>
                        </a>
                        <span class="news__item--date">
                            <?php echo $newsItem['date'];?>
                        </span>
                    </p>
                    <p class="news__item--body">
                        <?php echo $newsItem['short_content'];?>
                    </p>
                    <p class="news__item--btn">
                        <a href="/news/<?php echo $newsItem['id'];?>">Read more &#8227;</a>
                    </p>
                </div>
            <?php endforeach;?>
        </div>
        <ul class="pagination">
            <li class="start"></li>
            <li class="previous"></li>
            <li class="">1</li>
            <li class="">2</li>
            <li class="">3</li>
            <li class="">4</li>
            <li class="">5</li>
            <li class="">6</li>
            <li class="">7</li>
            <li class="next"></li>
            <li class="end"></li>
        </ul>
    </main>
    <footer class="wrapper">
        <ul class="nav">
            <li>
                <a href="#">Privacy</a>
            </li>
            <li>
                <a href="#">Search</a>
            </li>
            <li>
                <a href="#">Glossary</a>
            </li>
            <li>
                <a href="#">?Arbolegal?</a>
            </li>
            <li>
                <a href="#">Contacts</a>
            </li>
        </ul>
        <p class="contacts">
            <img src="../template/images/impacto-logo.png" alt="Webimpacto" class="logo-small">
            <ul class="address">
                <li class="">Calle Ciudad Real 2</li>
                <li class="cumber-bread noselect"></li>
                <li class="">Yuncos Valley</li>
                <li class="cumber-bread noselect"></li>
                <li class="">Toledo, Spain</li>
                <li class="cumber-bread noselect"></li>
                <li class="tel"><a href="tel:+34 900 900 900">Tel +34 900 900 900</a></li>
                <li class="cumber-bread noselect"></li>
                <li class="fax"><a href="fax:+34 900900900">Fax +34 900900900</a></li>
            </ul>
            <a class="mailto" href="mailto:info@webimpacto.com">info@webimpacto.com</a>
        </p>
        <p class="copyright">
            Webimpacto S.L. <span>&#8226;</span> News
            <a href="https://webimpacto.agency" target="_blank" rel="noopener noreferrer">Powered by impacto
                <img src="../template/images/logo-img.png" alt="&#174;">
            </a>
        </p>
    </footer>
</body>
</html>
