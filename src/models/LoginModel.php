<?php 

class LoginModel extends Model {
  function __construct()
  {
    parent:: __construct();
  }

  function checkUser($user) {
    $userUsername = $user['username'];
    $userPassword = $user['pass'];
    $query = $this->db->connect()->prepare('SELECT * FROM users WHERE name = :name ');
    try {
      $query->execute(['name' => $userUsername]); 
      $result = $query->fetch();
      $dbUsername = $result['name'];
      $dbPassword = $result['password'];
      $dbUserId = $result['userId'];
      if($userUsername == $dbUsername && password_verify($userPassword, $dbPassword)) {
        return $dbUserId ;
      } else {
        return false;
      }
    } catch (PDOException $e) {
      echo $e;
    }
    


  }
}