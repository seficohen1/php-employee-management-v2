<?php 

class View {
  function __construct()
  {
    echo 'Base view';
  }

  function render($name) {
    require VIEWS . '/' . $name . '.php';
  }
}