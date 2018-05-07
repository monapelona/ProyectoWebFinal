<?php
function conexionBD()
{
  $host="localhost";
  $userbd="vanejorge";
  $passwordbd="vj1234.";
  $bdnombre="registrousuarios";
  
  $conexion=new mysqli($host, $userbd, $passwordbd, $bdnombre);
  
  if(mysqli_connect_errno())
  {
	echo "No se conecto a BD";  
  }
  else
  {
	echo "Se conecto a BD";
	return $conexion;
  }
 
}


?>