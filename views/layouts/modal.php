<!-- Modal window -->
<div id="openModal-<?php echo $newsItem['id'];?>" class="modalDialog">
    <div class="modal__window">
        <a href="#close" title="Close" class="close">X</a>
        <div class="modal__content">
            <img src="<?php echo $newsItem['preview'];?>" alt="<?php echo $newsItem['title'];?>" class="modal--img">
            <h2><?php echo $newsItem['title'];?></h2>
            <p class="modal--date"><?php echo $newsItem['date'];?></p>
            <?php echo $newsItem['content'];?>
        </div>
    </div>
</div>
