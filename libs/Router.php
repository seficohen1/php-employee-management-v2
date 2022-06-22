<?php 




class Router {
  public $uri;
  public $controller;
  public $method;
  public $param; // id

  function __construct()
  {
    $this->setUri();
    $this->setController();
    $this->setMethod();
    $this->setParam();
    $this->execute();

  }

  public function setUri()
  {
    $this->uri = explode('/', $_GET['url']);
  }

  public function setController()
  {
    $this->controller = $this->uri[0] === '' ? 'main' : $this->uri[0];
  }

  public function setMethod() {
    $this->method = !empty($this->uri[1]) ? $this->uri[1] : 'nomethod';
  }

  public function setParam() {
    $this->param = !empty($this->uri[2]) ? $this->uri[2] : ''; 
  }


  public function getUri() {
    return $this->uri;
  }

  public function getController() {
    return $this->controller;
  }

  public function getMethod() {
    return $this->method;
  }

  public function getParam() {
    return $this->param;
  }
  public function execute(){
    $controller = $this->getController();
    $method = $this->getMethod();
    $param = $this->getParam();
    $controlerFile = "controllers/" . $controller . "Controller.php";
    echo $controlerFile;
    if(file_exists($controlerFile)){
      require_once $controlerFile;
      $controller = new $controller;
    }
    else{
      echo "error";
    }
  }
}