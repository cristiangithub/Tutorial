<?php

require_once("../modelo/clase_usuarios.php");
$usuarioModelo = new usuariosModelo();

$validacion 	= $_POST["validar"];
$nombre 		= $_POST["nombre"];
$apellidos 		= $_POST["apellidos"];
$telefono		= $_POST["telefono"];
$correo 		= $_POST["correo"];
$contrasena  	= $_POST["contrasena"];
$tipo_usuario	= $_POST["tipoUsuario"];

 switch($validacion)
{
	 case "registrar":
	 	$datos = $usuarioModelo->registrar_usuario($nombre,$apellidos,$telefono, $correo, $contrasena, $tipo_usuario);
	 break;
}
?>