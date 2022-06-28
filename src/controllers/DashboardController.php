<?php 

class Dashboard extends Controller {
  function __construct()
  {
    
    parent:: __construct();
  }

  function index() {
    // if(isset($_SESSION['userId'])) {
    //   $this->view->render('dashboard/index');
    // } else {
    //  header('Location:' . BASE_URL);
    // }

    $this->view->render('dashboard/index');
    
  }

  function get() {
    $this->model('EmployeeModel')->getAllEmployees();
  }


}