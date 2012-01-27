<?php

include_once('View.class.php');
include_once('include/tools.php');
include_once('Login.class.php');

class			Portal
{
  var $login;
  var $view;

  public function	__construct()
  {
    $this->view = new View;
    $this->view->view('header');

    if (!isset($_SESSION['login']))
      $this->login = new Login;
    else
      $this->login = unserialize($_SESSION['login']);
  }

  public function	__destruct()
  {
    $_SESSION['login'] = serialize($this->login);
    $this->view->view('footer');
  }

  public function	run()
  {
    $err = ($this->login->isLog() ? $this->login->logOutValidForm() : $this->login->logInValidForm());
    if (!$this->login->isLog())
      return ($this->view->view('login_form', $err));
    $this->view->view('logout_form');
    return (true);
  }


}

