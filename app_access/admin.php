<?php 
session_start(); 
if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'administrador') {
  $_SESSION['message'] = 'Se necesitan permisos de administrador';
  header('location: index.php');
  exit();
}
//Validacion de la pagina si tiene acceso a los cargos de administrador.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Pagina de administrador</h1>
</body>
</html>