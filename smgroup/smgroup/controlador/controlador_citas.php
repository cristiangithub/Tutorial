<?php
require_once("../modelo/conexion.php");
$db = new mysqli('localhost','root','','db_smgroup');
require_once("../modelo/clase_usuarios.php");
$usuarioModelo = new usuariosModelo();

$validacionCita = $_POST["validacionCita"];
$nombre = $_POST["nombre"];
$nombreCita  = $_POST["nombreCita"];



switch($validacionCita)
 {
	 case "asignar":
	 	 $datos = $usuarioModelo->set_registrar_cita($nombre, $nombreCita);

	 break;
  
   // case "consultar":
   //   $datos =$usuarioModelo->consultar_usuarios($nombre);
   // break;

case "consultar":

		 $consultar=$db->query("SELECT * FROM usuarios WHERE nombre='$nombre'"); 

	if (mysqli_num_rows($consultar) > 0 )
	{
		if ($registrar = mysqli_fetch_array($consultar))
		{
			// var_dump($registrar);
			$nombre = $registrar["nombre"];
			$apellidos = $registrar["apellidos"];
			$telefono = $registrar["telefono"];

		}
	}


?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<script src="../js/ajax.js"></script>
		<script src="../js/main.js"></script>
		<title>Datos Usuario</title>
	</head>
	<body>
		<div id="id_mensaje">
			<div class="content">
				<h2>CONSULTA DATOS</h2>
				<table border="2"  name ="tblproductos"   align="center">

					<tr>
						<td colspan="2">DATOS PERSONALES</td>
						
					</tr>
					<tr>
						<td><b>Nombre:</b></td>
						<td>
						<?php echo $nombre;?>
						</td>
					</tr>
					<tr>
						<td><b>Apellidos:</b></td>
						<td>
						<?php echo $apellidos;?>
						</td>
					</tr>
					<tr>
						<td><b>telefono:</b></td>
						<td>
						<?php echo $telefono;?>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div id="mensaje"></div>
	</body>
</html>
<?php

break;
	
}	

if($validacionCita!="consultar")
{
$consultar=$db->query('SELECT * FROM  usuarios');
?>
<table align="center" border="2" width="300">
	<tr>

		<td>Nombre</td>
		<td>Apellidos</td>
		<td>Telefono</td>
		<td>Nombre cita</td>
	</tr>
	<?php
	while ($registrar = mysqli_fetch_array($consultar))
	{
		?>
		<tr><td><?php echo $registrar['nombre'];?></td>
		<td><?php echo $registrar['apellidos'];?></td>
		<td><?php echo $registrar['telefono'];?></td>
		<td><?php echo $registrar['nombre_cita'];?></td>
		</tr>
		<?php
	}
	?>
</table>
<?php
}
?>