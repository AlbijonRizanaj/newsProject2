<?php
include(ROOT_PATH . "/database/db.php");
include(ROOT_PATH . "/controllers/validateUser.php");

$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'users';

function loginUser($user)
{
  $_SESSION['id'] = $user['id'];
  $_SESSION['username'] = $user['username'];
  $_SESSION['message'] = 'You are now logged in';
  $_SESSION['type'] = 'success';
  header('Location: ' . BASE_URL . '/news2.php');
  exit();
}

if (isset($_POST['register-btn'])) {
  $errors = validateUser($_POST);

  if (count($errors) === 0) {
    unset($_POST['register-btn'], $_POST['passwordConf']);

    $user_id = create($table, $_POST);
    $user = selectOne($table, ['id' => $user_id]);

    loginUser($user);
  } else {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];
  }
}

if (isset($_POST['login-btn'])) {
  $errors = validateLogin($_POST);

  if (count($errors) === 0) {
    $user = selectOne($table, ['username' => $_POST['username']]);

    if ($user && ($_POST['password'] === $user['password'])) {
      loginUser($user);
    } else {
      array_push($errors, 'Wrong credentials');
    }
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
}
