<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, nombre, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chemical Tutor</title>
  </head>
  <body>
    <body background="wall.jpg">

    <?php if(!empty ($user)): ?>
    <?php require 'pagina.php' ?>


    <?php else: ?>
      <h1>Bienvenido a Chemistry Tutor</h1>
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/style.css">

      <img src="matraz.png" border="0" width="200" height="200">
      <h3>Revolucionando la química</h3>
      <br> </br>
      <a class="boton"href="login.php"target"Ingresar">Ingresar</a>
      <a class="boton"href="signup.php"target"Registro">Regístrese</a>

      <style>/*Se setea los botones de ingreso*/
      .boton {
border: 1px solid #2e518b; /*anchura, estilo y color borde*/
padding: 10px; /*espacio alrededor texto*/
background-color: #2e518b; /*color botón*/
color: #ffffff; /*color texto*/
text-decoration: none; /*decoración texto*/
text-transform: uppercase; /*capitalización texto*/
font-family: 'Helvetica', sans-serif; /*tipografía texto*/
border-radius: 50px; /*bordes redondos*/
}

</style>

<h6>© 2018 Desarrollado por Rodrigo Montero, Miguel Pinto, Alexander Echeverria</h6>

      <?php endif; ?>
</body>
</html>
