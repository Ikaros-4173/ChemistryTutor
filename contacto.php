<!DOCTYPE html>
<html>
<body>
  <title>Acerca de nosotros</title>
<body background="fondo1.jpg">
<?php require 'cabecera.php' ?>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php if(!empty ($user)): ?>
    <?php require 'pagina.php' ?>
    <?php else: ?>

      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/style.css">
      <br> <br> <br> <br> <br> <br><br>
      <h2> Acerca del proyecto</h2>
      <img src="atomo.gif" border="0" width="200" height="200">
      <br>
      <p> Chemistry Tutor es una plataforma educativa, sin fines de lucro con aras de reforzar el conocimiento </p>
      <p> en temas básicos de química, a través de prácticos módulos, videotutoriales, libros adjuntos<p>
      <p>El proyecto, liderado por tres jovenes visionarios a saber Miguel Pinto, Rodrigo Montero y Alexander Echeverria</p>
      <p>son los encargados de llevar este gran aporte a la educación panameña </p>

</style>

<h3>© 2018 Desarrollado por Rodrigo Montero, Miguel Pinto, Alexander Echeverria</h3>

      <?php endif; ?>
</body>
</html>
