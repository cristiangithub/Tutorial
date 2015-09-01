<?php 
  require_once "../modelo/clase_usuarios.php"; 

   
   if(!isset($_SESSION["nombre"]))
	{
		?>
		para acceder a este contenido inicia session
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

					// session_start();

					echo $_SESSION["nombre"] ;
					?>
					<a href="../session_destruir.php">Cerrar sesión</a>
				</header>
			<body>
				<h1>Vista admin</h1>

				<ul>
					<li><a href="usuarios_registrados.php">Usuarios</a></li>
					<li><a href="asignar_citas.php">asignar citas</a></li>
				</ul>
			</body>
		</html>
	<?php
	}
?>