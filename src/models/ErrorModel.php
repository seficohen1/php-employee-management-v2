<?php 


class ErrorModel extends Model {
  function __construct()
  {
    parent:: __construct();
  }

  function loginError() {
    $error = 'there is something wrong with your password or email';
    return $error;
  }
}