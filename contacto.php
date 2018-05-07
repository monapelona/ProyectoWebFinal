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
  <title>Contacto</title>
    <link rel="stylesheet" type="text/css" href="styles/Styles.css">
    <script type="text/javascript" src="Javascript/gallery.js"></script>
  <h1>Contacto</h1>
  </head>
  <body>
  <div class="login">usuario: <?php echo $usuariologeado; ?> <a href="PHP/logoutusuario.php">Cerrar Sesion</a></div>
    <div id="contacto">
   <p> <i>romerovanessa.soy@gmail.com</i> </p>
   <p> <i>jorge.oregon1995@gmail.com</i></p>
   <a href="https://www.facebook.com/vanne.mromero">Facebook: Vanessa Martínez Romero</a><br/>

   <a href="https://www.facebook.com/DovoMaster">Facebook: Jorge David Oregón Baltazar</a>
   <p><b>Ubicación de la Universidad del Caribe</b></p>

   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14573.002613012528!2d-86.83096764988868!3d21.199976519007414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2c298cab405b%3A0xc7ce34485e9b3b8!2sUniversidad+del+Caribe!5e0!3m2!1ses-419!2smx!4v1518248024237" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

   <br/>

  	<p> <b>Referencias</b></p>
  	<a href="https://www.youtube.com/watch?v=RgSWh5jIx2A">Diseño de PagWeb con HTML, CSS y JavaScript pt.1</a><br/>
  	<a href="https://heptagrama.com/divide-en-secciones.htm">Etiquetas Importantes</a><br/>
  	<a href="http://ccd.uab.es/~sergi/manuals/html/frames/lesson07.html">Frames</a><br/>
  	<a href="https://www.youtube.com/watch?v=LmSUS6MuSzk">Tablas en HTML</a><br/>
  	<a href="https://www.youtube.com/watch?v=tg2HC4HXB_4">Tablas en CSS</a><br/>
    <a href="https://www.w3schools.com/js/default.asp">Tutorial Javascript</a><br/>
  	<br/>
  </div>
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