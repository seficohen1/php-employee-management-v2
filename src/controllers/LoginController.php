<?php 

class Login extends Controller{
  public $session;
  function __construct()
  {
    parent:: __construct();

  }

  function index() {
    $this->view->render('login/index');
  }

  function authUser() {
    if(isset($_POST)) {
      $user = $_POST;
      $checkUser = $this->model('LoginModel')->checkUser($user);
      if(is_numeric($checkUser)) {
        session_start();
        $_SESSION['userId'] = $checkUser;
        header("Location:".BASE_URL .'dashboard');
      } else {
        $message = $this->model('ErrorModel')->loginError();
        $data = ['error' => $message];
        $this->view->render('error/index', $data);
      }
    }
  }
}