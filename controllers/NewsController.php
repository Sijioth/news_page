<?php

include_once ROOT.'/models/News.php';

class NewsController {

  public function actionIndex() {
    // echo 'News list';
    $newsList = array();
    $newsList = News::getNewsList();

    require_once(ROOT . '/views/news/index.php');

    // echo '<pre>';
    // print_r($newsList);
    // echo'</pre>';

    // echo 'actionIndex';

    return true;
  }

  // public function actionView($category, $id) {
  public function actionView($id) {
    // echo 'News item';
    if ($id) {
      $newsItem = News::getNewsItemById($id);

      echo '<pre>';
      print_r($newsItem);
      echo'</pre>';

      // echo 'actionView';
    }
    // echo '<br>'.$category;
    // echo '<br>'.$id;

    return true;
  }
}
