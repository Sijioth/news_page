<?php

// include_once ROOT.'/components/Db.php';

class News {
  const NEWS_ON_PAGE = 3;
  /**
   * Returns single news item with specified id
   * @param integer $id
   */
  public static function getNewsItemById($id) {
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
   * Returns total news items
   */
  public static function getTotalNewsItems() {
      $db = Db::getConnection();

      $result = $db -> query('SELECT COUNT(id) AS count FROM news WHERE status = "1"');
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $row = $result->fetch();

      return $row['count'];
  }

  /**
   * Returns an array of news items
   * @param integer $page
   */
  public static function getNewsList($page = 1) {
    $page = intval($page);
    $offset = ($page - 1) * self::NEWS_ON_PAGE;
    // DB-request
    // $host = 'localhost';
    // $dbname = 'impacto_site';
    // $user = 'root';
    // $password = '';
    // $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $db = Db::getConnection();

    $newsList = array();

    $result = $db->query('SELECT id, title, DATE_FORMAT(date, "%d %b %Y")
                          AS date, short_content, content, preview FROM news
                          ORDER BY date DESC LIMIT ' . self::NEWS_ON_PAGE . ' OFFSET ' . $offset);

    $i = 0;
    while ($row = $result->fetch()) {
      $newsList[$i]['id'] = $row['id'];
      $newsList[$i]['title'] = $row['title'];
      $newsList[$i]['date'] = $row['date'];
      $newsList[$i]['short_content'] = $row['short_content'];
      $newsList[$i]['content'] = $row['content'];
      $newsList[$i]['preview'] = $row['preview'];
      $i++;
    }
    // return $result;

    return $newsList;
  }
}
