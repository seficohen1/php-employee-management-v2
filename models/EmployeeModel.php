<?php 

require 'employee/employee.php';

class EmployeeModel extends Model {
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

  function insert($newEmp) {
    $result = "OK"; 
    try {
      $query = $this->db->connect()->prepare('INSERT INTO employees (name, last_name, email, gender, city, street_address, state, age, postal_code, phone_number) VALUES (:name, :last_name, :email, :gender, :city, :street_address, :state, :age, :postal_code, :phone_number)'); 
      $query->execute([
        'name' => $newEmp['name'],
        'last_name' => $newEmp['last_name'],
        'email' => $newEmp['email'],
        'gender' => $newEmp['gender'],
        'city' => $newEmp['city'], 
        'street_address' => $newEmp['street_address'],
        'state' => $newEmp['state'],
        'age' => $newEmp['age'],
        'postal_code' => $newEmp['postal_code'],
        'phone_number' => $newEmp['phone_number']
      ]);
      return $result;
    } catch (PDOException $e) {
      if ($e->errorInfo[1] == 1062) {
        return $result = "This email already exists";
    } else {
        return $result = "Database error";
    }
    }
  }
}