
<?php
  include "BDConexion.php";
  
	
	$conexion = ConexionBD(); //mandamos llamar a la funcion que hace la conexion a la BD
	$usuario=$_POST['usuario'];  // le asignamos el valor del id usuario a la variable usuario 
	$password=$_POST['password'];  //le asignamos el valor del id password a la variable password 
	
	
	$pass_ciph = password_hash($password, PASSWORD_DEFAULT); 
	
	//Procedemos a hacer una busqueda de usuario que en este caso es un correo
	                                       // id(usuario) = variable usuario
										   
	$buscar = "SELECT * FROM usuarios WHERE usuario='$usuario'"; 
	
	echo $buscar;
	
	//Aqui se va a buscar de la tabla ususarios el valor de la variable usuario 
	
	$resultado = mysqli_query($conexion,$buscar);  //Ejecutamos la consulta a la BD 
	
	$numusuarios = mysqli_num_rows($resultado);  
	
	if($numusuarios > 0)
	{
		//Una vez que verificamos que el usuario existe, verificamos por separado el password 
		
		
		    $fila = mysqli_fetch_assoc($resultado);
			 
			 //Generamos las variables de sesion
			 session_start();  
			 
			 // Iniciamos la sesion 
			 $_SESSION["id_usuario"] = $fila["id_usuario"];  
			 $_SESSION["usuario"] = $fila["usuario"];       
			 header("Location: ../index.php");  
	
	}
	
	else
	{
		 echo "usted no se ha registrado, favor de registrarse";
		 header("Location: ../loginusuario.html"); 
	}
	
	$conexion->close()
	
	
	
	
	
	
	
	   //password_verify comprueba que el hash devuelto por la funcion password_hash() coincida con la contraseña ingresada por el usuario
	   
	/* if(password_verify($password, $fila["password"]))
	 {
		 $_SESSION["id_usuario"] = $fila["id_usuario"];  
		 $_SESSION["usuario"] = $fila["usuario"];      
		 header("Location: ../index.html"); 
	 }
	 else
	 {
		echo "usuario y/o password incorrectos";
		header("Location: ../loginusuario.html"); 
	 }
	 
	 mysqli_free_result($resultado);
	 $conexion->close();*/
	


?>