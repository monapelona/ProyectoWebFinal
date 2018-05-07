<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar nuevo usuario
</title>
 <link rel="stylesheet" type="text/css" href="styles/Styles.css">
</head>
<body>
 
    
    <!--Preguntamos a la DB si el usuario ya extiste, en caso de no existir lo  insertamos-->
    
    <?php
    
    include "BDConexion.php";
	
	$conexion = conexionBD();  // se guarda la funcion que hace la conexion a la BD en una variable 
	$usuario = $_POST['usuario'];   // se guarda el valor del id usuario en la variable usuario 
	$password = $_POST['password'];   // se guarda el valor del id password en la variable password 
	
	//La funcion de password_hash crea un hash de contraseña usando el algoritmo PASSWORD_DEFAULT de cifrado 
	$pass_ciph = password_hash($password, PASSWORD_DEFAULT);
	
	$tabla= "usuarios";
	
	//Procedemos a validar el usuario que se va a ingresar para ver si no existe en la BD antes de insertarlo 
	
	$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario'";
	$resultado = mysqli_query($conexion, $consulta);  // Ejecutamos la consulta a la BD 
	
	$numusuarios = mysqli_num_rows($resultado);  //Esta funcion devuelve el numero de registros encontrados
	
	if($numusuarios > 0)  // Si es mayor a 1, quiere decir que encontró otro igual y no lo inserta a la BD 
	{
		echo "\nEl usuario ya existe, favor de seleccionar otro";
	}
	else
	{
		// se hace la inserción del usuario y la contraseña cifrada a la BD 
	$insertarusuario = "INSERT INTO usuarios (usuario, password) VALUES('$usuario','$pass_ciph')" ;
	
	if($conexion->query($insertarusuario) === TRUE) // si se inserto el usuario a la BD entonces se creo de forma existosa 
	{
		echo "\nUsuario creado exitosamente";
	}
	else
	{
		echo "error: " .$insertarusuario. "<br>". $conexion->error;  // en caso contrario no se inserta y devolvemos un error 
	}
	
	//Cerramos sesion en BD
	
	$conexion->close();
	
	}
	
    
    ?>
    
    
</body>
</html>
