var baseUrl="http://localhost/smgroup/";
function realizar_registro(validar)
{

	var ajax_respuesta="",
		nombre="",
		apellidos="",
		telefono="",
		correo="", 
		contrasena="",
		tipoUsuario="",
	 	validacion=0;

	document.getElementById('validacion').value=validar;
	ajax_respuesta	= document.getElementById('mensaje_validacion');
	nombre			=document.getElementById('nombre').value;
	apellidos		=document.getElementById('apellidos').value;
	telefono		=document.getElementById('telefono').value;
	correo  		=document.getElementById('correo').value;
	contrasena		=document.getElementById('contrasena').value;
	tipoUsuario		=document.getElementById('tipoUsuario').value;
	
	if(validar=="registrar" )
	{
		if(nombre=="" || apellidos=="" || telefono=="" ||  correo=="" || contrasena=="" )
		{
			// alert("Estimado usario faltan datos por diligenciar");
			ajax_respuesta.innerHTML ="faltan campos para llenar";
		}
		else
		{
			validacion=1;
		}
	}

	if(validacion == 1)	
	{

			ajax=funcion_ajax();
			ajax.open("POST", baseUrl + "/controlador/controlador_registro.php",true);
			ajax.onreadystatechange=function() 
			{
				if (ajax.readyState==1) 
				{
						
						ajax_respuesta.innerHTML = "Cargando";
						
				}
				
				if (ajax.readyState==4) 
				{
					 respuesta = ajax.responseText;
					ajax_respuesta.innerHTML = respuesta;	
				}
			}
			ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			ajax.send("validar="+validar+
					  "&nombre=" + nombre + 
					  "&apellidos=" + apellidos + 
					  "&telefono=" + telefono + 
					  "&correo=" + correo +
					  "&contrasena=" + contrasena +
					  "&tipoUsuario=" + tipoUsuario +
					  "&tiempo=" + new Date().getTime());
	}

}


function realizar_login(enviar)
{
	
	var ajax_respuesta		="",
		login_nombre		="",
		login_contrasena	="",
		tipoUsuario_login	="",
	 	validacion 			=0;

	document.getElementById('enviar').value=enviar;
	camposVacios	 = 	document.getElementById('camposVacios');
	ajax_respuesta	 = 	document.getElementById('mensaje_login');
	login_nombre 	 =	document.getElementById('login_nombre').value;
	login_contrasena =	document.getElementById('login_contrasena').value;
	tipoUsuario    	 =	document.getElementById('tipoUsuario').value;
	
	if(enviar=="enviar" )
	{
		if(login_nombre=="" || login_contrasena=="" || tipoUsuario=="")
		{
			// alert("Estimado usario faltan datos por diligenciar");
			camposVacios.innerHTML ="faltan campos para llenar";
		}
		else
		{

			validacion = 1;
		}
	}

	if(validacion == 1)	
	{

			ajax=funcion_ajax();
			ajax.open("POST", baseUrl + "/controlador/controlador_session.php",true);
			ajax.onreadystatechange=function() 
			{
				if (ajax.readyState==1) 
				{
						
						ajax_respuesta.innerHTML = "Cargando";
						
				}
				
				if (ajax.readyState==4) 
				{


					 respuesta = ajax.responseText;

						
					 	var innerAjax = ajax_respuesta.value = respuesta;
					 	
					 
						var valor = ajax_respuesta.value;
						valortrim = valor.trim();/*espacios en blanco quitados con trim*/
						// console.log(valortrim);

					  if(valortrim =="Noexiste"){

						 console.log("no existio");
						 
					  }else{
					  	ajax_respuesta.value = "";
					  	document.formularioLogin.submit();
					  	
					  }	
				}
			}
			ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			ajax.send("enviar="+enviar+
					  "&login_nombre=" + login_nombre + 
					  "&login_contrasena=" + login_contrasena +
					  "&tipoUsuario=" + tipoUsuario+
					  "&tiempo=" + new Date().getTime());


	}
}


function asignar_cita(validacionCita){

	var ajax_respuesta	="",
		nombre 			="",
		nombreCita		="",
	 	validacion 		=0;

	ajax_respuesta	= document.getElementById('mensaje_validacion');
	nombre			= document.getElementById('nombre').value;
	nombreCita      = document.getElementById('nombreCita').value;
	
	if(validacionCita =="asignar")
	{
		if(nombreCita =="")
		{
			
			ajax_respuesta.innerHTML ="faltan campos para llenar";
		}else{
			validacion=1;
		}
	}
	
	 if (validacionCita == "consultar")
	{
		if(nombre=="")
		{
			alert("TIENES QUE INGRESAR UN nombre");
		}else{
			validacion=1;
		}
	}

	if(validacion == 1)	
	{

		if (validacionCita == "consultar")
		{
		   
		ajax_respuesta 		= document.getElementById('id_mensaje_validacion');   
		}else{
		   ajax_respuesta	= document.getElementById('mensaje_validacion');   
		

		}
			ajax=funcion_ajax();
			ajax.open("POST", baseUrl + "controlador/controlador_citas.php",true);
			ajax.onreadystatechange=function() 
			{
				if (ajax.readyState==1) 
				{
						
						ajax_respuesta.innerHTML = "Cargando";
						
				}
				
				if (ajax.readyState==4) 
				{
					 respuesta = ajax.responseText;
					ajax_respuesta.innerHTML = respuesta;	
				}
			}
			ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			ajax.send("validacionCita="+validacionCita+
					  "&nombre=" + nombre + 
					  "&nombreCita=" + nombreCita +
					  "&tiempo=" + new Date().getTime());
	}
}
