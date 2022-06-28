<?php 

class Router {
  protected $currentController = 'Login';
  protected $currentMethod = 'index';
  protected $params = [];

  public function __construct()
  {
    $url = $this->getUrl();
    
    if(!isset($url[0])) {
      $url[0] = $this->currentController;
    }

    //  Getting the controller form the first part of the URL
    if(file_exists(CONTROLLERS . '/' . ucwords($url[0]) . 'Controller') . '.php') {
      $this->currentController = ucwords($url[0]);
      unset($url[0]);
    }
    require_once CONTROLLERS . '/' . $this->currentController . 'Controller' . '.php';
    //  Instanciate controller
    $this->currentController = new $this->currentController;

    // Getting the method from the second part of the URL;
    if(isset($url[1])) {
      if(method_exists($this->currentController, $url[1])) {
        $this->currentMethod = $url[1];
        unset($url[1]);
      }
      
    }

    // Getting params 

    $this->params = $url  ? array_values($url) : []; // remember we are unsetting the url each stage (controller/method)
    
    // if we have an array with number therefore we have params 
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params); // Calling the method inside the controller, having the params as an optional argument.
  }

  function getUrl() {
    if(isset($_GET['url'])){
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL); // making sure there are no symbols in url
      $url = explode('/', $url);
      return $url;
      
    }
  }
}

