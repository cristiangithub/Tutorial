<!DOCTYPE html>
<html lang="en">
<?php
     require_once("modelo/clase_usuarios.php");
?>
<head>
	<meta charset="UTF-8">
	<title>login</title>
     <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
</head>

  <body>

  	<form name="formularioLogin" method="post" action="controlador/controlador_session.php">
        Nombre: <input type="text" name="login_nombre" id="login_nombre" title="Ingresa tu nombre">
        <br>
        contraseña: <input type="password" name="login_contrasena" id="login_contrasena">
        <br>
        tipo usuario:
        <select name="tipoUsuario" id="tipoUsuario">
        			<option value="cliente">cliente</option>
        			<option value="admin">admin</option>
        </select>
       
        validacion: <input type="text" name="enviar" id="enviar" readonly>
        <input name="login" id="login" type="button" value="Entrar" onclick="realizar_login('enviar')"/>
        <div id="camposVacios"></div>
        <div>
          <input type"text" id="mensaje_login">
        </div>
   </form>
   <a href="registro.php">Registrarse</a>
   <a href="index.php">volver</a>
  </body>
</html>