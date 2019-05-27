<?php

class NewsController {

  public function actionIndex($page = 1) {

    $newsList = array();
    $newsList = News::getNewsList($page);

    $total = News::getTotalNewsItems();

    $pagination = new Pagination($total, $page, News::NEWS_ON_PAGE, 'page-');

    require_once(ROOT . '/views/news/index.php');

    return true;
  }
}
