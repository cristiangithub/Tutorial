<?php

require_once("../modelo/clase_usuarios.php");
$usuarioModelo = new usuariosModelo();

$nombre 		= $_POST["login_nombre"];
$contrasena 	= $_POST["login_contrasena"];
$tipo_usuario 	= $_POST["tipoUsuario"];

switch($tipo_usuario)
 {
	 case "cliente":
	 	$datos = $usuarioModelo->login_usuario($nombre, $contrasena, $tipo_usuario);

	 break;

	case "admin":
	 	$datos = $usuarioModelo->login_usuario($nombre, $contrasena, $tipo_usuario);
	 break;
 }

 
if ( isset( $nombre ) and isset($tipo_usuario ) ){  
          
          $usuarioModelo->sessionUsuarios($nombre, $tipo_usuario );
    }
     
?>