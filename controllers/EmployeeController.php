<?php 

class EmployeeController extends Controller {
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
    // $this->view->render('dashboard/index');
    return $employees;
  }

  function createEmployee() {
    if(!empty($_POST)) {
      $firstName = $_POST['name'];
      $lastName = $_POST['lastName'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $city = $_POST['city'];
      $streetAddress = $_POST['streetAddress'];
      $state = $_POST['state'];
      $age = $_POST['age'];
      $postalCode = $_POST['postalCode'];
      $phoneNumber = $_POST['phoneNumber'];
      
      $msg = '';

      $result = $this->model->insert([
        'name' => $firstName,
        'last_name' => $lastName,
        'email' => $email,
        'gender' => $gender,
        'city' => $city,
        'street_address' => $streetAddress,
        'state' => $state,
        'age' => $age,
        'postal_code' => $postalCode,
        'phone_number' => $phoneNumber
      ]);
      if($result == "OK") {
        $msg = 'Employee added successfuly!';
      } else {
        $msg = $result;
      }
      $this->view->msg = $msg;
    }
    $this->view->render('create/index');
  }

}