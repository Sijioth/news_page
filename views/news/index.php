<?php include ROOT . '/views/layouts/header.php'?>

    <main>
        <section class="wrapper">
            <div class="heading">
                <h2 class="title">News</h2>
                <?php echo $pagination->get();?>
            </div>
            <div class="news">
                <?php include ROOT . '/views/layouts/news_item.php'?>
            </div>


            <div class="footing">
                <?php echo $pagination->get();?>
            </div>
        </section>
    </main>

<?php include ROOT . '/views/layouts/footer.php'?>
