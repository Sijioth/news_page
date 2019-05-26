<?php
return array(
  // 'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2'
//   'news/([0-9]+)' => 'news/view/$1', // actionView in NewsController
    'news/page-([0-9]+)' => 'news/index/$1',
    'news' => 'news/index',  // actionIndex in NewsController
    '' => 'site/index',
);
