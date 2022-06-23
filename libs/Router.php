<?php 

require_once(CONTROLLERS . '/ErrorController.php');


class Router {
  function __construct()
  {
    $url = isset($_GET['url']) ? $_GET['url'] : null;
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    //  if there's no controller (TODO: implent checkSession - login MVC)
    if(empty($url[0] || $url[0]) == 'main') {
      $fileController = CONTROLLERS . '/MainController' . '.php';
      require_once($fileController);
      $controller = new MainController();
      $controller->loadModel('Main');
      // $controller->getEmployees();
      $controller->render();
      return false;
    }

    $class = ucfirst($url[0]);
    $fileController = CONTROLLERS . '/'. $class . 'Controller.php'; 
    $classController = $class . 'Controller';
    
  
    if(file_exists($fileController)) {
      require_once $fileController;
      
      $controller = new $classController;
      $controller->loadModel($class);
     

      $nParam = sizeof($url);
      if($nParam == 1) {
        $controller->defaultMethod();
        
      }
      if($nParam == 2) {
        if($controller->{$url[1]}() === false) {
          echo 'calling error controller from router';
        }
      }

      
    }
  }
}