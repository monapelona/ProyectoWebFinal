
<?php
  //Cierre de sesion
  
  session_start();  // Reanudamos la sesion que ya se habái abierto anteriormente en el loginusuario.php
  session_destroy();  //Cerramos la sesion 
  
   header("Location:../loginusuario.html");  //una vez cerrada la sesion redirigimos al usuario a la pagina del login 


?>