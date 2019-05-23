<?php
// Front controller

// 1. Basic config

// Error displaying (delete after development completion)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Include system files
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

// 3. Establish database connection

// 4. Call Router
$router = new Router;
$router->run();

$con = mysqli_connect("localhost", "root", "", "impacto_site");
mysqli_set_charset($con, "utf-8");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect toMySQL" . mysqli_connect_error();
}

// $query = "SELECT ...";
// $info = mysqli_query($con, $query);

?>
