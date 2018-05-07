<!--Vanessa Martínez Romero 160300006
	Jorge David Oregón Baltazar 160300117-->

<?php
 //Vamos a jalar las variables de sesion
 session_start();
 $usuariologeado=$_SESSION["usuario"];  //Le pasamos la variable de sesion a una variable temporal 
  
  //Vamos a proteger el acceso a esta pagina
  if($usuariologeado == "")
  {
	  header("Location: loginusuario.html");
  }
   
 
?>

<!DOCTYPE html>
<html lang="es">
  <head>
  	<meta charset="utf-8">
  	<title>Nuestro Proyecto Web</title>
  	<link rel="stylesheet" type="text/css" href="styles/Styles.css">
  	<script type="text/javascript" src="Javascript/gallery.js"></script>
  	<h1>Nuestra página web</h1>
  	<h2>Bienvenidos</h2>
  </head>
  <body>
  <div class="login">usuario: <?php echo $usuariologeado; ?> <a href="PHP/logoutusuario.php">Cerrar Sesion</a></div>
  	<p>Haz click en el botón y espera 3 segundos...
    <button onclick="setTimeout(myFunction, 3000);">Haz Click</button>
</p>
  
  	<div id="imagenJ">
  		<img src="images/io.jpg" width="300" height="300" border="2" title="Jorge Oregón" />
  		<div id="b1">
  		<p>Nombre: Jorge David Oregón Baltazar</p>
  		<p>Edad: 22 años</p>
  		<p>Color favorito: Morado</p>
  		<p>Comida favorita: Tacos dorados</p>
  	</div>
  	</div>
  	<div id="imagenV">
  		<img src="images/eia.jpg" width="300" height="300" border="2" title="Vanessa Martínez" />
  		<div id="b2">
  		<p>Nombre: Vanessa Martínez Romero</p>
  		<p>Edad: 21 años</p>
  		<p>Color favorito: Rojo</p>
  		<p>Comida favorita: Lasagna</p>
  	</div>
  	</div>
  	<div id="Galeria">
		<span id="Descripcion">Galería de imágenes</span> 
			<ul id="ListaDeImagenes">
			<li><a onclick="return showPic(this)" href="images/vj2.jpg" width="500" height="400" border="2" title="Imagen número 1">1</a></li>
			<li><a onclick="return showPic(this)" href="images/vj3.jpg" width="500" height="400" border="2" title="Imagen número 2">2</a></li>
			<li><a onclick="return showPic(this)" href="images/vj4.jpg" width="500" height="400" border="2" title="Imagen número 3">3</a></li>
			<li><a onclick="return showPic(this)" href="images/vj5.jpg" width="500" height="400" border="2" title="Imagen número 4">4</a></li>
			<li><a onclick="return showPic(this)" href="images/vj6.jpg" width="500" height="400" border="2" title="Imagen número 5">5</a></li>
			<li><a onclick="return showPic(this)" href="images/vj7.jpg" width="500" height="400" border="2" title="Imagen número 6">6</a></li>
			<li><a onclick="return showPic(this)" href="images/vj8.jpeg" width="500" height="400" border="2" title="Imagen número 7">7</a></li>
			</ul>
	<img id="Contenedor" src="Fotos2/vj1.jpg" width="500" height="400" border="2" />
	</div>
	</div>
  <p id="demo"></p>
  <script>
   document.getElementById("demo").innerHTML = Date();
    </script>

    <p id="a2"></p>
    <script>
     document.getElementById("a2").innerHTML = 
    "El URL de este sitio es:<br>" + window.location.href;
</script>
	  	<div id="menu">
		<ul class="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="nosotros.php">Quienes somos</a></li>
				<li><a href="materias.php">Lista de materias</a></li>
				<li><a href="loginusuario.html">Log In</a></li>
				<li><a href="descargas.php">Descargas</a></li>
				<li><a href="contacto.php">Contacto</a></li>
			</ul>
		</div>
  </body>
 </html>