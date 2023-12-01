<?php
session_start();
include 'users.php';

$user = isset($_GET['user']) ? $_GET['user'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';

$data_user = isset($users[$user]) ? $users[$user] : null;
if ($data_user && $data_user['password'] == $password) {
  //El header se encarga de redirigirnos a la pagina de inicio.
  header('Location: index.php');
  //Con el echo debemo movernos a mano.
  //echo "Tienes acceso con nivel" . $data_user['level'];
  //Para darle accesoa al usuario.
  $_SESSION['level'] = $data_user['level'];
  $_SESSION['user'] = $user;
} else {
  //echo "Usuario incorrecto";
  session_destroy();
  header('Location: login.php');
}
