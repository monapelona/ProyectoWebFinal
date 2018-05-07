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
    <link rel="stylesheet" type="text/css" href="styles/Styles.css">
    <script type="text/javascript" src="Javascript/gallery.js"></script>
  <title>¿Quiénes somos?</title>
  <h1>¿Quiénes somos?</h1>
  </head>
  <body>
  <div class="login">usuario: <?php echo $usuariologeado; ?> <a href="PHP/logoutusuario.php">Cerrar Sesion</a></div>
    <div id="b3">
      <div id="imagen1">
      <img src="images/OtroYo.jpg" align="right" width="300" height="300" border="2" title="Jorge Oregón" />
    </div>
  	<p>Hola mi nombre es <b>Jorge David Oregón Baltazar</b> , tengo 22 años y actualmente estudio en la Universidad del Caribe la carrera de Ingeniería en Datos e Inteligencia Organizacional. El bachillerato lo cursé en la <i>UNID</i> donde igual cursé mi primera carrera, la cuál tuve que dejar por razones personales. </p>
    <p>La razón por la cual decidí tomar el examen de admisión a la Universidad del Caribe fue debido a que noté que esta carrera estaba enfocada al área de seguridad y manejo de un gran flujo de información, lo cual me llamó mucho la atención.</p>
    <p>También me atrajo ya que se mencionaba que se verían cosas relacionadas al desarrollo multimedia y juegos.</p>
    <p>Pasatiempos:</p>
    <ol>
      <li>Salir a caminar</li>
      <li>Leer libros (de ciencia ficción)</li>
      <li>Jugar videojuegos</li>
      <li>Salir con mis amigos</li>
      <li>Ver películas o series</li>
      <li>Jugar fútbol</li>
      <li>Pasear a mi perro</li>
    </ol>
  </div>

  <div id="b4">
    <div id="imagen2">
      <img src="images/OtraElla.jpg" align="right" width="300" height="300" border="2" title="Vanessa Martínez" />
    </div>
   <p>Hola mi nombre es  <b>Vanessa Martínez Romero</b> , tengo 21 años y actualmente estudio en la Universidad del Caribe la carrera de Ingeniería en Datos e Inteligencia Organizacional. El bachillerato lo cursé en la  <i>Universidad La Salle</i>, y mi primera carrera la cursé en la <i>Universidad TecMilenio </i> . Dicha carrera fue: Diseño Gráfico y Animación Digital, la cual tuve que dejar debido a que no cumplió con mis expectativas. Elegí esta carrera porque me llama mucho la atención la parte de desarrollo de videojuegos y la inteligencia artificial. </p>
   <p>Pasatiempos: </p>
   <ol>
   	     <li>Salir a caminar o correr con mi perro</li>	
          <li>Nadar</li>
          <li>Dibujar</li>
          <li>Tocar guitarra</li>
          <li>Cantar</li>
          <li>Ver películas o series</li>
          <li>Salir con amigos</li>
          <li>Aprender nuevos idiomas</li>
   </ol>
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