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
        <h1 class="visuallyhidden">Webimpacto</h1>
        <a href="#">
            <img src="../template/images/impacto-logo.png" alt="Webimpacto" class="logo">
        </a>
        <ul class="nav">
            <li class="cumber-bread noselect">&#8226;</li>
            <li class="nav__link">
                <a href="#">About us</a>
            </li>
            <li class="cumber-bread noselect">&#8226;</li>
            <li class="nav__link">
                <a href="#">Products</a>
            </li>
            <li class="cumber-bread noselect">&#8226;</li>
            <li class="nav__link">
                <a href="#">Services</a>
            </li>
            <li class="cumber-bread noselect">&#8226;</li>
            <li class="nav__link">
                <a href="#">News</a>
            </li>
            <li class="cumber-bread noselect">&#8226;</li>
            <li class="nav__link">
                <a href="#">Contacts</a>
            </li>
            <li class="cumber-bread noselect">&#8226;</li>
        </ul>
    </header>
    <main>
        <section class="wrapper">
            <div class="heading">
                <h2 class="title">News</h2>
                <ul class="pagination">
                    <li class="start noselect">&#8227;|</li>
                    <li class="previous noselect">&#8227;&#8227;</li>
                    <li class="page-number">1</li>
                    <li class="page-number">2</li>
                    <li class="page-number">3</li>
                    <li class="page-number">4</li>
                    <li class="page-number">5</li>
                    <li class="page-number">6</li>
                    <li class="page-number">7</li>
                    <li class="next noselect">&#8227;&#8227;</li>
                    <li class="end noselect">&#8227;|</li>
                </ul>
            </div>
            <div class="news">
                <?php foreach ($newsList as $newsItem):?>
                    <div class="news__item">
                        <div>
                            <img src="<?php echo $newsItem['preview'];?>" alt="News item image" class="news__item--img">
                        </div>
                        <div class="news__item--content">
                            <div class="news__item--title">
                                <a href="/news/<?php echo $newsItem['id'];?>">
                                    <h3>
                                        <?php echo $newsItem['title'];?>
                                    </h3>
                                </a>
                                <span class="news__item--date">
                                    <?php echo $newsItem['date'];?>
                                </span>
                            </div>

                            <div class="news__item--body">
                                <?php echo $newsItem['short_content'];?>
                            </div>
                            <div class="news__item--btn">
                                <a href="/news/<?php echo $newsItem['id'];?>">Read more <span>&#8227;</span></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="footing">
                <ul class="pagination">
                    <li class="start noselect">&#8227;|</li>
                    <li class="previous noselect">&#8227;&#8227;</li>
                    <li class="page-number">1</li>
                    <li class="page-number">2</li>
                    <li class="page-number">3</li>
                    <li class="page-number">4</li>
                    <li class="page-number">5</li>
                    <li class="page-number">6</li>
                    <li class="page-number">7</li>
                    <li class="next noselect">&#8227;&#8227;</li>
                    <li class="end noselect">&#8227;|</li>
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <section class="wrapper">
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
            <div class="contacts">
                <img src="../template/images/impacto-logo.png" alt="Webimpacto" class="logo-small">
                <ul class="address">
                    <li class="">Calle Ciudad Real 2</li>
                    <li class="cumber-bread noselect">|</li>
                    <li class="">Yuncos Valley</li>
                    <li class="cumber-bread noselect">|</li>
                    <li class="">Toledo, Spain</li>
                    <li class="cumber-bread noselect">|</li>
                    <li class="tel"><a href="tel:+34 900 900 900">Tel +34 900 900 900</a></li>
                    <li class="cumber-bread noselect">|</li>
                    <li class="fax"><a href="fax:+34 900900900">Fax +34 900900900</a></li>
                </ul>
                <a class="mailto" href="mailto:info@webimpacto.com">info@webimpacto.com</a>
            </div>
        </section>
        <section class="copyright">
            <div class="copyright__content wrapper">
                Webimpacto S.L. <span>&#8226;</span> News
                <a href="https://webimpacto.agency" target="_blank" rel="noopener noreferrer">Powered by impacto
                    <img src="../template/images/logo-img.png" alt="&#174;">
                </a>
            </div>
        </section>
    </footer>
</body>
</html>
