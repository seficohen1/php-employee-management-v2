<?php
require_once "./employeeManager.php";

$httpMethod = $_SERVER["REQUEST_METHOD"];

switch($httpMethod){
    case 'POST':
    $newEmployee = $_POST;
    addEmployee($newEmployee); 
    if (isset($_POST['lastName'])) {
        header("Location: ../employee.php?status=employeeUpdated");
    }
    break;
    case 'PUT':
    parse_str(file_get_contents("php://input"), $updateEmployee);
    updateEmployee($updateEmployee);
    break;
    case 'DELETE':
     // Get the database connection file
     parse_str(file_get_contents("php://input"), $delete);
     deleteEmployee($delete["id"]);
     break;
    default:
     break;
} 
