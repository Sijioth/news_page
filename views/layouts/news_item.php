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
