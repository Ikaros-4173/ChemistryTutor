

<!DOCTYPE html>
<html>
<body>
  <title>Chemistry tutor</title>

  <header>
  	<nav>
  		<ul>
  			<li><a href="/proyecto"><img src="matraz.png" border="0" width="20" height="10"></a></li>
  			<li><a href="modulo.php">Módulos</a></li>
  			<li><a href="videotutoriales.php">Videotutoriales</a></li>
  			<li><a href="experimentos1.php">Experimentos divertidos</a></li>
  			<li><a href="contacto.php">Acerca del proyecto</a></li>
        <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
  	</nav>
  </header>

<style>
/*Eliminamos los margenes y paddings que agrega el navegador por defecto*/
* {
  padding: 0;
  margin: 0;
}

/*Agregamos margenes inferiores a los parrafos*/
p {
  margin-bottom: 20px;
}

header {
  background: rgba(0,0,0,0.9);
  width: 100%;
  position: fixed;
  z-index: 100;
}

nav {
  float: left; /* Desplazamos el nav hacia la izquierda */
}

nav ul {
  list-style: none;
  overflow: hidden; /* Limpiamos errores de float */
}

nav ul li {
  float: left;
  font-family: Arial, sans-serif;
  font-size: 16px;
}

nav ul li a {
  display: block; /* Convertimos los elementos a en elementos bloque para manipular el padding */
  padding: 20px;
  color: #fff;
  text-decoration: none;
}

nav ul li:hover {
  background: #13E0ED;
}

.contenido {
  padding-top: 120px;
}

.wrapper {
  width: 80%;
  margin: auto;
  overflow:hidden;
}


</style>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

</body>
</html>
