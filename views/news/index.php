<?php include ROOT . '/views/layouts/header.php'?>

<!-- <script>
        $(document).ready(function () {
            $.ajax({
                url: 'index.php',
                type: 'GET',
                data: 'page='.<?php ?>.'&move=1',
            })
        })
    </script> -->

    <main>
        <section class="wrapper">
            <div class="heading">
                <!-- <div> -->
                    <h2 class="title">News</h2>
                <!-- </div> -->
                <?php echo $pagination->get();?>
            </div>
            <div class="news">
                <?php include ROOT . '/views/layouts/news_item.php'?>
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
