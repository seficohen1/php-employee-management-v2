<?php 

class Employee extends Controller {
  function __construct()
  {
    parent::__construct();
  }

  function index() {
    $this->view->render('employee/index');
  }

  function getEmpById($id) {
    $data = $this->model('EmployeeModel')->getById($id);
    $this->view->render('employee/index', [$data] );
    
  }

    function updateEmpolyee() {
      if(isset($_POST)){
        $result = $this->model('EmployeeModel')->update($_POST);
        if($result) {
          header('Location:' . BASE_URL . 'dashboard');
        }
      }
    }

    function addNewEmployee() {
      if(isset($_POST)) {
        $result = $this->model('EmployeeModel')->create($_POST);
        if($result) {
          header('Location:' . BASE_URL . 'dashboard');
        }
      }
    }
}