<?php
  require 'database.php';
  $message = '';
  if (!empty($_POST['nombre']) && !empty($_POST['apellido'])&& !empty($_POST['email'])&& !empty($_POST['fecha']) && !empty($_POST['password']) && !empty($_POST['provincia']) && !empty($_POST['sexo']) && !empty($_POST['telefono'])) {
    $sql = "INSERT INTO users (nombre, apellido, email, fecha, password, provincia, sexo, telefono) VALUES (:nombre, :apellido, :email, :fecha, :password, :provincia, :sexo, :telefono)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellido', $_POST['apellido']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':fecha', $_POST['fecha']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':provincia', $_POST['provincia']);
    $stmt->bindParam(':sexo', $_POST['sexo']);
    $stmt->bindParam(':telefono', $_POST['telefono']);
    if ($stmt->execute()) {
      $message = 'Se ha registrado con éxito, bienvenido a Chemistry Tutor';
    } else {
      $message = 'Lo sentimos, ha ocurrido un error, comuniquese con el administrador';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
        <?php require 'partials/header.php' ?>
    <body background="wall.jpg">
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registro de usuario</h1>
    <span>o <a href="login.php">Inicia sesión</a></span>

    <form action="signup.php" method="POST">
      <input name="nombre" type="text" placeholder="Nombre">
      <input name="apellido" type="text" placeholder="Apellido">
      <input name="email" type="text" placeholder="Correo">
      <p>Ingrese fecha de nacimiento <input name="fecha" type="date" min="1900-01-21" max="2050-01-01" </p>
      <input name="password" type="password" placeholder="Ingrese su contraseña">
      <input name="confirm_password" type="password" placeholder="Confirme contraseña">

      <p>Seleccione provincia <select name="provincia"</p>
       <option value="bocas del toro" selected="selected">Bocas del Toro</option>
       <option value="cocle">Coclé</option>
       <option value="colón">Colón</option>
       <option value="chiriqui">Chiriqui</option>
       <option value="darien">Darien</option>
       <option value="herrera">Herrera</option>
       <option value="los santos">Los Santos</option>
       <option value="panama">Panama</option>
       <option value="veraguas">Veraguas</option>
       <option value="panama oeste">Panama Oeste</option>
       <option value="guna yala">Guna Yala</option>
      </select>

      <p>Sexo <select name="sexo"</p> //formulario para provincia
       <option value="hombre" selected="selected">Hombre</option>
       <option value="mujer">Mujer</option>
       <option value="gay">Otro </option>

      <input name="telefono" type="text" placeholder="Teléfono">
      <input type="submit" value="Enviar">
      </form>

  </body>
</html>
