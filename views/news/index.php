<?php include ROOT . '/views/layouts/header.php'?>

    <main>
        <section class="wrapper">
            <div class="heading">
                <!-- <div> -->
                    <h2 class="title">News</h2>
                <!-- </div> -->
                <?php echo $pagination->get();?>
            </div>
            <div class="news">
                <?php foreach ($newsList as $newsItem):?>
                    <?php include ROOT . '/views/layouts/modal.php'?>
                    <!-- News item section -->
                    <div class="news__item">
                        <div class="news__item--image">
                            <img src="<?php echo $newsItem['preview'];?>" alt="<?php echo $newsItem['title'];?>" class="news__item--img">
                        </div>
                        <div class="news__item--content">
                            <div class="news__item--title">
                                <a href="#openModal-<?php echo $newsItem['id'];?>">
                                    <h3>
                                        <?php echo $newsItem['id'];?>
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
                                <a href="#openModal-<?php echo $newsItem['id'];?>">Read more <span>&#8227;</span></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>


            <div class="footing">
                <?php echo $pagination->get();?>

                <!-- <ul class="pagination">
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
                </ul> -->
            </div>
        </section>
    </main>

<?php include ROOT . '/views/layouts/footer.php'?>
