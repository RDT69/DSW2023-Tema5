<?php 
session_start();
if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .alert {
      background-color: #ff9999;
      padding: 10px;
    }
    </style>
</head>
<body>
  
  <?php 
  if (isset($_SESSION['message'])) {
   echo "<div class='alert'>" . $_SESSION['message'] . "</div>";
   unset($_SESSION['message']);
  }
  ?>
  
  <h1>Página de inicio</h1>
  <?php
    if (isset($user)) {
      echo "<h2>Usuario resgistrado: $user</h2>";
      echo "<a href='logout.php'>Cerrar Sesion</a>";
    } else {
      include 'login.php';
    }
  ?>
  <h2>Menu de Usuario</h2>
  <ul>
    <li><a href="page1.php">Pagina 1</a></li>
    <li><a href="page2.php">Pagina 2</a></li>
  </ul>
  <h2>Menu de administrador</h2>
  <ul>
    <li><a href="admin.php">Pagina de administrador</a></li>
  </ul>
</body>
</html>