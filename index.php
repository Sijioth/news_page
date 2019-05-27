<?php
# Front controller

# 1. Basic config

# Error displaying (delete before production stage)
ini_set('display_errors', 1);
error_reporting(E_ALL);

# 2. Include system files
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');

# 3. Call Router
$router = new Router;
$router->run();

?>
