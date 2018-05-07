
//funcion para validar usuario

  function validarusuario()  // "login" es el nombre del formulario 
  {  
	  usuario=document.login.usuario.value;  //guardamos en una variable el valor del id usuario
     patronuser = new RegExp("^([a-z0-9]{1,}[\._\-]*)+@[a-z]{2,}\.[a-z]{2,3}$");  //expresion para validar correo o usuario
	  resultado = patronuser.test(usuario);
	 
	 if(!resultado)
	 {
		 document.getElementById("errorusuario").innerHTML="correo no valido";
		 return 1;
	 }
	 else
	 {
		  document.getElementById("errorusuario").innerHTML=" ";
		  return 0;
	 }
	
   
  }
  



//funcion para validar password
  function validarpassword()
  {     //guardamoe en una variable el valor del id de password
      password=document.login.password.value;
	  mayuscula = new RegExp("[A-Z]+");
	  caracterespecial = new RegExp("[@#%^*_=+<>,;/`~\.-]+");
	  numerocaracteres = new RegExp("^([a-zA-Z0-9@._,;`~-]{8,})$");
	  numeros = new RegExp("[0-9]+");
	  
	  /*console.log(caracterespecial.test(password));
	  console.log(mayuscula.test(password));
	  console.log(numerocaracteres.test(password));
	  console.log(numeros.test(password));*/
	  
	 document.getElementById("errorpassword").innerHTML=" ";
	  resultado=caracterespecial.test(password);  
	  
	   if(resultado)  //Evaluamos el caso del caracter especial
	   {
		   document.getElementById("errorpassword").innerHTML=" ";
		    
			resultado=mayuscula.test(password);
			if(resultado)  //Evaluamos el caso de las mayusculas
			{
				document.getElementById("errorpassword").innerHTML=" ";
				
				resultado=numeros.test(password);
				if(resultado) //Evaluamos el caso de los numeros en el password
				{
					document.getElementById("errorpassword").innerHTML=" ";
					
					resultado=numerocaracteres.test(password);
					if(resultado)  //Evaluamos el caso del numero de caracteres en el password
					{
						document.getElementById("errorpassword").innerHTML=" ";
						return 0;
					}
					else
					{
						document.getElementById("errorpassword").innerHTML="El password debe contener minimo 8 caracteres";
						return 1;
					}
		        }
		        else
		        {
		           document.getElementById("errorpassword").innerHTML="El password debe contener al menos un numero";
				   return 1;
		        }
	        }
	        else
	        {
	           document.getElementById("errorpassword").innerHTML="El password debe contener al menos una mayuscula";
			   return 1;
	        }
		}
		else
		{
		   document.getElementById("errorpassword").innerHTML="El password debe contener al menos un caracter especial";
		   return 1;
		}			
   }			
  
  
  
  //Funcion para verificar que el password ingresado sea correcto
  function mismopassword()
  {
	password=document.login.password.value;
	password2=document.login.password2.value;
	
	if(password != password2)
	{
		document.getElementById("errorpassword2").innerHTML="El password no coincide";
		 return 1;
	}
	else
	{
		document.getElementById("errorpassword2").innerHTML=" ";
		 return 0;
	}
	
	  
  }
  
  
  
  //validamos usuario y contraseña mandando llamar a las otras funciones 
  function validar()
  {        //si todo es correcto se retornara 0 o FALSE indicando que no falta nada
      
	  /*res=validarusuario();
	  res1=validarpassword();
	  res2=mismopassword();
	  
		  alert(res);
		  alert(res1);
		  alert(res2);*/
	  
	  if(validarusuario()==0 && validarpassword()==0 && mismopassword()==0) 
	  {
		  alert('Usuario listo para crearse');
		  document.login.submit();
	  }
	  else
	  {
		  alert('usuario y/o password incorrectos');
	  }
  }





