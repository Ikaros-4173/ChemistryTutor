<!DOCTYPE html>
<html>
<body>
  <title>Notación Científica</title>
  <body background="wall1.jpg" bgproperties="fixed">
  <?php require 'cabecera.php' ?>
  <br><br><br><br><br><br><br>

<div class="texto"/*texto informativo*/
<div id=”texto″><h1>Notación Científica</h1>
  <br>
  <img src="notacion.png" border="0" width="400" height="200">
  <h2 align="left">Introducción a la notación científica</h2>
  <br>
  <div class="box-grey"> Cuando trabajan con números muy grandes o muy pequeños, los científicos, matemáticos e ingenieros usan notación científica para expresar esas cantidades. La notación científica es una abreviación matemática, basada en la idea de que es más fácil leer un exponente que contar muchos ceros en un número. Números muy grandes o muy pequeños necesitan menos espacio cuando son escritos en notación científica porque los valores de posición están expresados como potencias de 10. Cálculos con números largos son más fáciles de hacer cuando se usa notación científica.</div>

  <h2 align="left">Primeros pasos en notación científica</h2>
  <br>
  <div class="box-grey"> La célula roja humana es muy pequeña y se estima que tiene un diámetro de 0.0065 milímetros. Por otro lado, un año luz es una unidad de distancia muy grande que mide alrededor de 10,000,000,000,000,000 metros. Ambas cantidades son difíciles de escribir, y sería muy fácil ponerles o quitarles un cero o dos de más. Pero en notación científica, el diámetro de una célula roja se escribe como 6.5 x 10^-3 milímetros, y un año luz es más o menos 1 x 10^16  metros. Esas cantidades son más fáciles de usar que sus versiones largas.
  <br> <br> Nota que es el exponente el que nos dice si el término es un número muy grande o muy pequeño. Si el número es ≥ 1 en la notación decimal estándar, el exponente será ≥ 0 en notación científica. En otras palabras, números grandes requieren potencias positivas de 10.
  <br>Si un número está entre 0 y 1 en notación estándar, el exponente será < 0 en notación científica. Números pequeños son descritos por potencias negativas de 10. Como es tan útil, veamos más de cerca los detalles del formato de la notación científica.</div>

  <h2 align="left">Formato de la notación científica</h2>
  <br>

  <img src="formato.jpg" border="0" width="800" height="100"><br>
  <p>Debemos poner mucha atención a esas convenciones para escribir correctamente en notación científica. Veamos algunos ejemplos:</p>
  <br>
  <img src="ejemplo.jpg" border="0" width="500" height="250">
  <p>Sólo los números que siguen las convenciones apropiadas para todas las partes de la expresión se consideran notación científica.</p>

<h2 align="left">Convertir numero entero a notación científica</h2>
<br>
<div class="box-grey">Ahora que entendemos el formato de notación científica, comparemos algunos números expresados en notación decimal estándar y notación científica para entender cómo convertir de una forma a la otra. Observa la tabla de abajo. Pon mucha atención al exponente de la notación científica y la posición del punto decimal en la notación estándar.</div>
<br>
<img src="cuadro.jpg" border="0" width="500" height="250">
<br>
<div class="box-grey">Empecemos con los números grandes. Para escribir un número grande en notación científica, primero debemos mover el punto decimal a un número entre 1 y 10. Como mover el punto decimal cambia el valor, tenemos que aplicar una multiplicación por la potencia de 10 que nos resulte en un valor equivalente al original. Para encontrar el exponente, sólo contamos el número de lugares que recorrimos el punto decimal. Ese número es el exponente de la potencia de 10.
Analicemos un ejemplo. Para escribir 180,000 en notación científica, primero movemos el punto decimal hacia la izquierda hasta que tengamos un número mayor o igual que 1 y menor que 10. El punto decimal no está escrito en 180,000, pero si lo estuviera sería después del último cero. Si empezamos a recorrer el punto decimal un lugar cada vez, llegaremos a 1.8 después de 5 lugares:</div>
<div class="box-green">180000
<br>18000.0
<br>1800.00
<br>180.000
<br>18.0000
<br>1.80000
</div>
<div class="box-grey">Ahora conocemos el número (1.8) y el exponente de la potencia de 10 que preserva el valor original (5). En notación científica 180,000 se escribe 1.8 x 10^5. El proceso de cambiar entre notación decimal y científica es el mismo para números pequeños (entre 0 y 1), pero en este caso el punto decimal se mueve hacia la derecha, y el exponente será negativo. Considera el número pequeño 0.0004:</div>
<div class="box-green">0.0004
<br>00.004
<br>000.04
<br>0000.4
<br>00004.</div>
<div class="box-grey">Movimos el punto decimal hacia la derecha hasta que obtuvimos el número 4, que está entre 1 y 10 como es requerido. Lo movimos 4 lugares, pero fueron movimientos que hicieron el número más grande que el original. Entonces tendremos que multiplicar por una potencia negativa de 10 para traer de regreso el nuevo número al equivalente de su valor original. En notación científica 0.0004 se escribe 4.0 x 10^-4.</div>

<h2 align="left">Convertir notación científica a número entero</h2>
<br>
<p align="justify">También podemos ir al revés — números escritos en notación científica pueden ser trasladados a notación decimal. Por ejemplo, un átomo de hidrógeno tiene un diámetro de 5 x 10^-8 mm. Para escribir este número en notación decimal, convertimos la potencia de 10 en una serie de ceros entre el número y el punto decimal. Como el exponente es negativo, todos esos ceros van a la izquierda del número 5:</p>
<p>5x10^-8</p>
<p>5.</p>
<p>0.5</p>
<p>0.05</p>
<p>0.005</p>
<p>0.0005</p>
<p>0.00005</p>
<p>0.000005</p>
<p>0.0000005</p>
<p>0.00000005</p>
<p align="justify">Por cada potencia de 10, movemos el punto decimal un lugar hacia la derecha, Ten cuidado aquí y no te dejes llevar por los ceros — el número de ceros después del punto decimal siempre será 1 menos que el exponente. Se necesita una potencia de 10 para mover el punto decimal a la izquierda del primer número.</p>

<h2 align="left">Adición y sustracción de notación científica</h2>
<br>
<p align="justify">Al igual que en el conjunto de los numeros naturales, enteros, reales, etc. Se puede llevar a cabo operaciones arítmeticas básicas en notación científica. Con los puntos anteriormente estudiado, se puede resolver operaciones de cualquier índole</p>
<br>
<p align="justify">Tenemos 450000 + 1270 + 530000.</p>
<p align="justify">Tomando en cuenta los procedimientos anteriores, tenemos como resultado:</p>
<p>450000= 4.50x10^3</p>
<p>1270=1.27x10^3</p>
<p>530000=5.3x10^5</p>
<p align="justify">Ahora bien, para sumar tenemos que llevar las cantidades a una misma potencia, en éste caso nos difiere 1.27x10^3, para poder llevarlo a la potencia de 5, corremos el punto dos cifras más, siempre de derecha a izquierda, obteniendo 0.01x10^5 (Se agregaron las cantidades que hacían falta, siendo siempre 0.)</p>
<p align="justify">Teniendo las cantidades a una misma potencia, procedemos a sumar</p>
<img src="suma nc.jpg" border="0" width="200" height="200">
<p align="justify">Obteniendo como respuesta 9.81x10^5</p>

<h2 align="left">Producto y cociente de notación científica</h2>
<br>
<p align="justify">Números que están escritos en notación científica pueden ser multiplicados y divididos fácilmente aprovechando algunas propiedades y reglas. Para multiplicar números en notación científica, primero multiplicamos los números que no son potencias de 10 (la a en a x 10n). Luego multiplicamos las potencias de 10 al sumar los exponentes.</p>
<p align="justify">Esto producirá un nuevo número por una potencia de 10 diferente. Todo lo que tenemos que hacer es comprobar si este nuevo valor está en notación científica. Si no, lo convertimos.</p>
<p align="justify">Veamos un ejemplo</p>
<img src="multi nc.jpg" border="0" width="400" height="400">
<p align="justify">Para dividir números en notación científica, también aplicamos las propiedades de los números y las reglas de los exponentes. Empezamos por dividir los números que no son potencias de 10 (la a en a x 10n). Luego dividimos las potencias de 10 al restar los exponentes.</p>
<p align="justify">Esto producirá un nuevo número y una potencia de 10 diferente. Si no está ya en notación científica, lo convertimos.</p>
<p align="justify">Veamos un ejemplo</p>
<img src="div nc.jpg" border="0" width="400" height="400">
<p align="justify">Nota que cuando dividimos los términos exponenciales, restamos el exponente del denominador del exponente del numerador.</p>
</br>
<br>
<a class="boton"href="conversion.php"target"videos">Capitulo siguiente</a>
</div>

<style>
.texto{
float:center;
}
.box-grey{
margin:0 0 25px;
	overflow:hidden;
	padding:20px;
	-webkit-border-radius: 10px;
  border-radius: 10px;
}
.box-grey {
	background-color:#F5F5F5;
	border:1px solid #DDDDDD;
  opacity:0.5;
}
.box-green{
margin:0 0 25px;
	overflow:hidden;
	padding:20px;
	-webkit-border-radius: 10px;
  border-radius: 10px;
}
.box-green {
	background-color:#FFF59D;
	border:1px solid #DDDDDD;
  opacity:0.5;
}

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

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

</body>
</html>
