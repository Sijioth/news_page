<?php

include_once ROOT.'/models/News.php';
include_once ROOT.'/components/Pagination.php';

class NewsController {

  public function actionIndex($page = 1) {
    // echo 'News list';
    // echo '<br/>'.$page;

    $newsList = array();
    $newsList = News::getNewsList($page);

    $total = News::getTotalNewsItems();

    $pagination = new Pagination($total, $page, News::NEWS_ON_PAGE, 'page-');

    // self::actionView($page);
    // require_once(ROOT . '/views/layouts/news_item.php');

    require_once(ROOT . '/views/news/index.php');

    // echo '<pre>';
    // print_r($newsList);
    // echo'</pre>';

    // echo 'actionIndex';

    return true;
  }

/**
 * public function actionView($category, $id) {
 * public function actionView($id) {
 */
    public function actionView($page) {
        $newsList = array();
        $newsList = News::getNewsList($page);

        $total = News::getTotalNewsItems();

        $pagination = new Pagination($total, $page, News::NEWS_ON_PAGE, 'page-');

        require_once(ROOT . '/views/layouts/news_item.php');
    // echo 'News item';
        // if ($id) {
            // $newsItem = News::getNewsItemById($id);

            // echo '<pre>';
            // print_r($newsItem);
            // echo'</pre>';

            // echo 'actionView';
        // }
    // echo '<br>'.$category;
    // echo '<br>'.$id;

    return true;
  }
}
