<?php 

require 'employee/employee.php';

class DashboardModel extends Model {
  function __construct()
  {
    parent:: __construct();
  }

  function get() {
    $employees = [];

    try {
      $query = $this->db->connect()->query("SELECT * FROM employees;");
      
      while ($row = $query->fetch()) {
        $employee = new Employee();
        $employee->id = $row['employeeId'];
        $employee->name = $row['name'];
        $employee->lastName = $row['last_name'];
        $employee->email = $row['email'];
        $employee->gender = $row['gender'];
        $employee->city = $row['city'];
        $employee->streetAddress = $row['street_address'];
        $employee->age = $row['age'];
        $employee->state = $row['state'];
        $employee->postalCode = $row['postal_code'];
        $employee->phoneNumber = $row['phone_number'];

        array_push($employees, $employee);
      }
       echo json_encode($employees);
      
    } catch (PDOException $e) {
      echo $e;
    }
  }
}