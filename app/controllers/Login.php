<?php

class Login extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['user'])) {
      $data['title'] = "Login";
      $this->view('login/index', $data);
    } else {
      header("Location:" . BASEURL . "film");
      exit;
    }
  }

  public function loginAction()
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $data['user'] = $this->model('users_model')->getUserLogin($email, $password);

    if ($data['user'] == NULL) {
      Flasher::setflash('danger', 'Email atau Password tidak ditemukan!');
      header("Location:" . BASEURL . "login");
      exit;
    } else {
      $_SESSION['user'] = $data['user'];
      header("Location:" . BASEURL . "film");
      exit;
    }
  }

  public  function logout()
  {
    unset($_SESSION['user']);
    session_destroy();
    header("Location:" . BASEURL . "login");
    exit;
  }
}
