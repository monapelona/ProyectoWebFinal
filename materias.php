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
  <title>Lista de Materias</title>
    <link rel="stylesheet" type="text/css" href="styles/Styles.css">
    <script type="text/javascript" src="Javascript/gallery.js"></script>
  <h1>Lista de Materias</h1>
  <h3>Materias de Vanessa</h3>
  </head>
  <body>
  <div class="login">usuario: <?php echo $usuariologeado; ?> <a href="PHP/logoutusuario.php">Cerrar Sesion</a></div>
    <div id="materiasV">
  	<table border="3" width="300" align="left">
      <tr>
        <td rowspan="8">Primer semestre</td>
        <td>Algoritmos y estructura de datos</td>
        <td>8</td>
        <tr>
          <td>Física clásica</td>
          <td>10</td>
        </tr>
        <tr>
          <td>Desarrollo de habilidades del pensamiento</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Taller de interacción grupal y competencias comunicativas</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Sistemas operativos POSIX</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Teoría general de sistemas</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Inglés: Tópicos 1</td>
          <td>Aprobado</td>
        </tr>
        <tr>
          <td>Francés: Nivel A1</td>
          <td>Aprobado</td>
        </tr>
      </tr>
      <tr>
        <td rowspan="7">Segundo semestre</td>
        <td>Diseño de patrones para datos estructurados</td>
        <td>7</td>
        <tr>
          <td>Cálculo diferencial</td>
          <td>8</td>
        </tr>
        <tr>
          <td>Introducción a los sistemas de información</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Introducción a las redes</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Taller de redacción profesional</td>
          <td>10</td>
        </tr>
        <tr>
          <td>Organización y diseño de computadoras</td>
          <td>0</td>
        </tr>
        <tr>
          <td>Inglés: Tópicos 2</td>
          <td>Aprobado</td>
        </tr>
      </tr>
      <tr>
        <td rowspan="2">Verano</td>
        <td>Tenis</td>
        <td>Aprobado</td>
        <tr>
          <td>Taller de cuerdas orquestales</td>
          <td>Aprobado</td>
        </tr>
      </tr>    
      <tr>
        <td rowspan="6">Tercer semestre</td>
        <td>Álgebra lineal</td>
        <td>7</td>
        <tr>
          <td>Electricidad y magnetismo</td>
          <td>7</td>
        </tr>
        <tr>
          <td>Probabilidad y estadística</td>
          <td>8</td>
        </tr>
        <tr>
          <td>Innovación disruptiva</td>
          <td>8</td>
        </tr>
        <tr>
          <td>Taller de responsabilidad social y ambiental</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Organización y diseño de computadoras</td>
          <td>8</td>
        </tr>
      </tr>
    </table>
  </div>
    <h3 align="right">Materias de Jorge</h3>
    <div id="materiasJ">
    <table border="3" width="300" align="right">
      <tr>
        <td rowspan="8">Primer semestre</td>
        <td>Algoritmos y estructura de datos</td>
        <td>5</td>
        <tr>
          <td>Física clásica</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Cálculo diferencial</td>
          <td>0</td>
        </tr>
        <tr>
          <td>Desarrollo de habilidades del pensamiento</td>
          <td>7</td>
        </tr>
        <tr>
          <td>Taller de interacción grupal y competencias comunicativas</td>
          <td>8</td>
        </tr>
        <tr>
          <td>Sistemas operativos POSIX</td>
          <td>5</td>
        </tr>
        <tr>
          <td>Teoría general de sistemas</td>
          <td>8</td>
        </tr>
        <tr>
          <td>Inglés: Nivel 4</td>
          <td>Aprobado</td>
        </tr>
      </tr>
      <tr>
        <td rowspan="8">Segundo semestre</td>
        <td>Algoritmos y estructura de datos</td>
        <td>8</td>
        <tr>
          <td>Cálculo diferencial</td>
          <td>7</td>
        </tr>
        <tr>
          <td>Introducción a los sistemas de información</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Introducción a las redes</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Taller de redacción profesional</td>
          <td>8</td>
        </tr>
        <tr>
          <td>Organización y diseño de computadoras</td>
          <td>0</td>
        </tr>
        <tr>
          <td>Teatro</td>
          <td>Aprobado</td>
        </tr>
        <tr>
          <td>Inglés: Tópicos 1</td>
          <td>Aprobado</td>
        </tr>
      </tr>
      <tr>
        <td rowspan="2">Verano</td>
        <tr>
          <td>Tenis</td>
          <td>Aprobado</td>
        </tr>
      </tr>
      <tr>
        <td rowspan="8">Tercer semestre</td>
        <td>Sistemas operativos POSIX</td>
        <td>8</td>
        <tr>
          <td>Organización y diseño de computadoras</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Álgebra lineal</td>
          <td>7</td>
        </tr>
        <tr>
          <td>Probabilidad y estadística</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Electricidad y magnetismo</td>
          <td>7</td>
        </tr>
        <tr>
          <td>Innovación disruptiva</td>
          <td>10</td>
        </tr>
        <tr>
          <td>Taller de responsabilidad social y ambiental</td>
          <td>9</td>
        </tr>
        <tr>
          <td>Inglés: Tópicos 2</td>
          <td>Aprobado</td>
        </tr>
      </tr>
    </table>
  </div>
  <div id="ActualV">
    <h3 align="center">Carga actual Vanessa</h3>
    <table border="3" width="300" align="center">
      <tr>
        <td rowspan="5">Cuarto semestre</td>
        <td>Identidad y cultura</td>
      </tr>
      <tr>
        <td>Programación web</td>
      </tr>
      <tr>
        <td>Cálculo integral</td>
      </tr>
      <tr>
        <td>Matemáticas discretas</td>
      </tr>
      <tr>
        <td>Interconectividad en redes</td>
      </tr>
    </table>
  </div>
  <div id="ActualJ">
    <h3 align="center">Carga actual Jorge</h3>
     <table border="3" width="300" align="center">
      <tr>
        <td rowspan="6">Cuarto semestre</td>
        <td>Identidad y cultura</td>
      </tr>
      <tr>
        <td>Programación web</td>
      </tr>
      <tr>
        <td>Diseño de patrones para datos estructurados</td>
      </tr>
      <tr>
        <td>Cálculo integral</td>
      </tr>
      <tr>
        <td>Matemáticas discretas</td>
      </tr>
      <tr>
        <td>Interconectividad en redes</td>
      </tr>
    </table>
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