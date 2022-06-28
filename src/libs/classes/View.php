<?php 

class View {
  function __construct()
  {
    
  }

  function render($view, $data = []) {
    if(file_exists(VIEWS . '/'. $view . '.php')) {
      require_once VIEWS . '/'. $view . '.php';
      
    } else {
      die('view does not exsit'); 
    }
    
  }
}