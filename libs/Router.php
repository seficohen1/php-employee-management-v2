<?php 

require_once(CONTROLLERS . '/ErrorController.php');


class Router {
  function __construct()
  {
    $url = isset($_GET['url']) ? $_GET['url'] : null;
    $url = rtrim($url, '/');
    $url = explode('/', $url);

    if(empty($url[0] || $url[0]) == 'main') {
      $fileController = CONTROLLERS . '/MainController' . '.php';
      require_once($fileController);
      $controller = new MainController();
      $controller->loadModel('Main');
      $controller->getEmployees();
      $controller->render();
      
    }
  }
}