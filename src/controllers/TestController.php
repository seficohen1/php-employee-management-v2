<?php 

class Test extends Controller {
  function __construct()
  {
   
   parent:: __construct();
  }

  function index() {
    $greeting = $this->model('TestModel')->sayHi();
    $data = ['greeting' => $greeting];
    
    $this->view->render('test/index', $data);
  
   
  }
}