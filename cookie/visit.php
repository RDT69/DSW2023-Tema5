<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Visitas</h1>
  <?php
  if (isset($_GET['username'])) {
    $username = $_GET['username'];
    setcookie('username', $username, time() + 120);
    setcookie('visit-count', 2);
    echo "<h3>Bienvenido</h3>";
  }
  if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    if (isset($_COOKIE['visit-count'])) {
      $count = $_COOKIE['visit-count'];
      echo "<h3> Has visitado la pàgina $count veces.</h3>";
      $count++;
      setcookie('visit-count', $count);
    }
  }
  if (isset($username)) {
    echo "<h2>Hola $username </h2>";
  } else {
  ?>
    <h2>Dime tu nombre</h2>
    <form action="visit.php">
      <input type="text" name="username" id="">
      <input type="submit" value="enviar">
    </form>
  <?php
  }
  ?>
</body>

</html>