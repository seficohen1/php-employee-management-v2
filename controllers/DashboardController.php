<?php 

class DashboardController extends Controller {
  function __construct()
  {
    parent:: __construct();
  }

  function defaultMethod() {
    $employees = $this->getAllEmployees();

  }

  function getAllEmployees() {
    $employees = $this->model->get();
    $this->view->employees = $employees;
    $this->view->render('dashboard/index');
    return $employees;
  }

}