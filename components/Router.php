<?php

class Router {
  private $routes;

  public function __construct()
  {
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


  public function run()
  {
    // Get query string
    $uri = $this->getURI();
    // echo $uri;

    // Chech if query present in routes.php
    foreach ($this->routes as $uriPattern => $path) {
      // echo "<br>$uriPattern -> $path";

      // Compare $uriPattern and $uri
      if (preg_match("~$uriPattern~", $uri)) {
        // echo $path;

        // echo '<br/>Где ищем (запрос, который набрал пользователь): '.$uri;
        // echo '<br/>Что ищем (совпадение из правила): '.$uriPattern;
        // echo '<br/>Кто обрабатывает: '.$path;

        // Get internal path from external path according to rhe rule
        $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
        // echo '<br/><br/>Нужно сформировать: '.$internalRoute;

        // Define controller, action and parameters to process query
        $segments = explode('/', $internalRoute);

        // echo '<pre>';
        // print_r($segments);
        // echo '</pre>';

        $controllerName = array_shift($segments).'Controller';
        $controllerName = ucfirst($controllerName);
        // echo $controllerName;

        $actionName = 'action'.ucfirst(array_shift($segments));
        // echo $actionName;

        // echo 'controller name: '.$controllerName;
        // echo 'action name: '.$actionName;
        $parameters = $segments;
        // echo '<pre>';
        // print_r($parameters);
        // echo '</pre>';
        // die();

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




    // print_r($this->routes);
    // echo 'Class Router, method run';
  }
}
