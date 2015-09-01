<?php   
    require_once "../modelo/clase_usuarios.php"; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>citas</title>
	    <script src="../js/ajax.js"></script>
		<script src="../js/main.js"></script>
	</head>
	<body>
		<header>
			<?php

		        echo $_SESSION["nombre"] ;
		    ?>
	        <a href="../session_destruir.php">Cerrar sesión</a>
	        <a href="index_admin.php">volver</a>
		</header>
		<h2>Ingresa el nombre del usuario y consulta los datos, luego le asignas la cita</h2>
		<form method="post" action="">
			<div id="id_mensaje_validacion"></div>
		      Nombre: <input type="text" name="nombre" id="nombre" title="Ingresa tu nombre" >
		      <br>
		     nombre cita: <input type="text" name="nombreCita" id="nombreCita" value="">
		      <br>
		      validacion: <input type="text" name="validacionCita" id="validacionCita" readonly>
		      <input type="button" value="Asignar cita" onclick="asignar_cita('asignar')" />
		      <input type="button" value="Consultar usuario" onclick="asignar_cita('consultar')" />
		       <div id="mensaje_validacion"></div>
		 </form>
	</body>
</html>