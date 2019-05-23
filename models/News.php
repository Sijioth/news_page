<?php

// include_once ROOT.'/components/Db.php';

class News
{
  /**
   * Returns single news item with specified id
   * @param integer $id
   */
  public static function getNewsItemById($id)
  {
    // DB-request
    $id = intval($id);

    if ($id) {
      // $host = 'localhost';
      // $dbname = 'impacto_site';
      // $user = 'root';
      // $password = '';
      // $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
      $db = Db::getConnection();

      $result = $db->query('SELECT * FROM news WHERE id='.$id);

      // $result->setFetchMode(PDO::FETCH_NUM);
      $result->setFetchMode(PDO::FETCH_ASSOC);

      $newsItem = $result->fetch();

      return $newsItem;
    }
  }

  /**
   * Returns an array of news items
   */
  public static function getNewsList()
  {
    // DB-request
    // $host = 'localhost';
    // $dbname = 'impacto_site';
    // $user = 'root';
    // $password = '';
    // $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $db = Db::getConnection();

    $newsList = array();

    $result = $db->query('SELECT id, title, date, short_content, preview FROM news ORDER BY date DESC LIMIT 3');

    $i = 0;
    while ($row = $result->fetch()) {
      $newsList[$i]['id'] = $row['id'];
      $newsList[$i]['title'] = $row['title'];
      $newsList[$i]['date'] = $row['date'];
      $newsList[$i]['short_content'] = $row['short_content'];
      $newsList[$i]['preview'] = $row['preview'];
      $i++;
    }
    // return $result;

    return $newsList;
  }
}
