<?php 
  require_once "../modelo/clase_usuarios.php"; 

   
   if(!isset($_SESSION["nombre"]))
	{
		?>
		Debe iniciar session para acceder a este contenido
		<a href='http://localhost/smgroup/login.php'>Página principal</a>";
		<?php
	}else{
	?>
	
	    <!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>index</title>
		</head>
<header>
		<?php

		//session_start();

		echo $_SESSION["nombre"] ;
		?>
		<a href="../session_destruir.php">Cerrar sesión</a>
	</header>
		<body>
			<h1>este es el cliente</h1>
		</body>
		</html>
	<?php
		}
?>