<?php 

require 'content/EmployeeRow.php';

class EmployeeModel extends Model {
  function __construct()
  {
    parent::__construct();
  }



  function getAllEmployees() {
    $employees = [];

    try {
      $query = $this->db->connect()->query("SELECT * FROM employees;");
      
      while ($row = $query->fetch()) {
        $employee = new EmployeeRow();
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

  function getById($id) {
   $employee = new EmployeeRow();
   $query = $this->db->connect()->prepare("SELECT * FROM employees WHERE employeeId = :id");
   
   try {
     $query->execute(['id' => $id]);

     while ($row = $query->fetch()) {
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
     } 
     return $employee;
    } catch (PDOException $e){
        return null;
     }
   
  }

  function update($employee) {
    $query = $this->db->connect()->prepare('UPDATE employees SET name = :name, last_name = :lastName, email = :email, gender = :gender, city = :city, street_address = :streetAddress, state = :state, age = :age, postal_code = :postalCode, phone_number = :phoneNumber WHERE employeeId = :id ');

    try {
      $query->execute([
        ':id' => $employee['id'],
        ':name' => $employee['name'],
        ':lastName' => $employee['lastName'],
        ':email' => $employee['email'],
        ':gender' => $employee['gender'],
        ':city' => $employee['city'],
        ':streetAddress' => $employee['streetAddress'],
        ':state' => $employee['state'],
        ':age' => $employee['age'],
        ':postalCode' => $employee['postalCode'],
        ':phoneNumber' => $employee['phoneNumber'],
      ]);
      return true;
    } catch (PDOException $e) {
      
      return false;
    }
  }

  function create($employee) {
    $query = $this->db->connect()->prepare('INSERT INTO employees (name, last_name, email, gender, city, street_address, state, age, postal_code, phone_number) VALUES (:name, :lastName, :email, :gender, :city, :streetAddress, :state, :age, :postalCode, :phoneNumber)'); 

    try {
      $query->execute([
        ':name' => $employee['name'],
        ':lastName' => $employee['lastName'],
        ':email' => $employee['email'],
        ':gender' => $employee['gender'],
        ':city' => $employee['city'],
        ':streetAddress' => $employee['streetAddress'],
        ':state' => $employee['state'],
        ':age' => $employee['age'],
        ':postalCode' => $employee['postalCode'],
        ':phoneNumber' => $employee['phoneNumber'],
      ]);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}