<?php 

class Controller {
  public function __construct()
  {
    $this->view = new View();
    
  }

  function model($model) {
    require_once  MODELS . '/' . $model . '.php';
    return new $model();
  }
}