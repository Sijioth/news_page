<?php

class Router {
  private $routes;

  public function __construct() {
    $routesPath = ROOT.'/config/routes.php';
    $this->routes = include($routesPath);
  }

  /**
  * Returns request string
  * @return string
  */
  private function getURI() {
    if (!empty($_SERVER['REQUEST_URI'])) {
      return trim($_SERVER['REQUEST_URI'], '/');
    }
  }


  public function run() {
    // Get query string
    $uri = $this->getURI();

    // Chech if query present in routes.php
    foreach ($this->routes as $uriPattern => $path) {

      // Compare $uriPattern and $uri
      if (preg_match("~$uriPattern~", $uri)) {

        // Get internal path from external path according to rhe rule
        $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

        // Define controller, action and parameters to process query
        $segments = explode('/', $internalRoute);

        $controllerName = array_shift($segments).'Controller';
        $controllerName = ucfirst($controllerName);

        $actionName = 'action'.ucfirst(array_shift($segments));

        $parameters = $segments;

        // Include controller-class file
        $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
        if (file_exists($controllerFile)) {
          include_once($controllerFile);
        }

        // Create an object and call the method (action)
        $controllerObject = new $controllerName;
        $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
        if ($result != null) {
          break;
        }
      }
    }
  }
}
