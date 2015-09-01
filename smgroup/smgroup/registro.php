<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>SmGroup</title>
      <script src="js/main.js"></script>
      <script src="js/ajax.js"></script>
  </head>
  <body>
      <h2>Registro</h2>
   <form method="post" action="controlador/controlador_registro.php">
        Nombre: <input type="text" name="nombre" id="nombre" title="Ingresa tu nombre">
        <br>
        Apellidos: <input type="text" name="apellidos" id="apellidos" title="Ingresa tus apellidos">  
        <br>
        Telefono: <input type="text" name="telefono" id="telefono">
        <br>
        Correo: <input type="email" name="correo" id="correo">
        <br>
        contraseña: <input type="password" name="contrasena" id="contrasena">
        <br>
        tipo de usuario: <input type="text" name="tipoUsuario" id="tipoUsuario" value="cliente">
        validacion: <input type="text" name="validacion" id="validacion" readonly>
        <input type="button" value="Registrar" onclick="realizar_registro('registrar')" /> <div id="mensaje_validacion"></div>
   </form>
   <a href="login.php">Ir al login</a>
   <a href="index.php">volver</a>
  </body>
</html>