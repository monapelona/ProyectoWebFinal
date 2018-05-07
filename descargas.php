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
  <title>Seccion de Descargas</title>
    <link rel="stylesheet" type="text/css" href="styles/Styles.css">
  	<script type="text/javascript" src="Javascript/gallery.js"></script>
  <h1>Sección de Descargas</h1>
  </head>
  <body>
   <div class="login">usuario: <?php echo $usuariologeado; ?> <a href="PHP/logoutusuario.php">Cerrar Sesion</a></div>
  	<center>
  	<p>Bienvenid@ a la Sección de Música de nuestra página</p>
  	<p>Aquí encontrarás un breve repertorio de nuestros gustos musicales</p>
  	<a href="Musica/A thousand miles.mp3" download="A thousand miles"> <img src="images/imgtrack1.jpg" width="145" height="145"></a>
  	<br/>
  	<p><b>A thousand miles-Vanessa Carlton</b></p>
  	<a href="Musica/Take On Me.mp3" download="Take On Me"> <img src="images/imgtrack2.jpg" width="145" height="145"></a>
  	<br/>
  	<p><b>Take On Me-A-ha</b></p>
  	<a href="Musica/Major Tom.mp3" download="Major Tom"> <img src="images/imgtrack3.jpg" width="145" height="145"></a>
  	<br/>
  	<p><b>Major Tom-Peter Schilling</b></p>
  	<a href="Musica/Here With Me.mp3" download="Here With Me"> <img src="images/imgtrack4.jpg" width="145" height="145"></a>
  	<br/>
  	<p><b>Here With Me-The Killers</b></p>
  	<a href="Musica/Is this Love.mp3" download="Is this Love"> <img src="images/imgtrack5.jpg" width="145" height="145"></a>
  	<br/>
  	<p><b>Is this Love-Bob Marley</b></p>
  	<a href="Musica/Africa.mp3" download="Africa"> <img src="images/imgtrack6.jpg" width="145" height="145"></a>
  	<br/>
  	<p><b>Africa-Toto</b></p>
  	<a href="Musica/Id Love You To Want Me.mp3" download="Id Love You To Want Me"> <img src="images/imgtrack7.jpg" width="145" height="145"></a>
  	<br/>
  	<p><b>Id Love You To Want Me-Lobo</b></p>
  	<a href="Musica/Who Can It Be Now.mp3" download="Who Can It Be Now"><img src="images/imgtrack8.jpg" width="145" height="145"></a>
  	<br/>
  	<p><b>Who Can It Be Now-Men At Work</b></p>
  	</center>
  	<input type="button" value="Back" onclick="goBack()">
   <br/>
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