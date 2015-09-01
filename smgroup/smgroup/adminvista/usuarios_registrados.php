<?php   
     require_once "../modelo/clase_usuarios.php"; 

    $usuarioModel = new usuariosModelo(); 
    $consultaUsuarios = $usuarioModel->get_usuarios(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title> 
 </head> 
 <body> 
    <header>
        <?php

        // session_start();

        echo $_SESSION["nombre"] ;
        ?>
        <a href="../session_destruir.php">Cerrar sesión</a>
        <a href="index_admin.php">volver</a>

     </header>
    <h1>USUARIOS REGISTRADOS</h1>
     <table > 
            <tr> 
                <td> 
                    Idusuarios 
                </td> 
                <td > 
                    Nombre 
                </td> 
                <td> 
                    Apellidos 
                </td> 
                <td> 
                    Telefono 
                </td> 
                <td> 
                    Correo 
                </td> 
                
            </tr><!-- /THEAD --> 

            <?php foreach ($consultaUsuarios as $usuarios): ?> 
           <!--  <?php //var_dump($row)?> -->

            <tr> 
                <td><?php echo $usuarios['idusuarios']; ?></td>
                <td><?php echo $usuarios['nombre']; ?></td> 
                <td><?php echo $usuarios['apellidos']; ?></td> 
                <td><?php echo $usuarios['telefono']; ?></td> 
                <td><?php echo $usuarios['correo']; ?></td> 
            </tr><!-- /TROW --> 
         
            <?php endforeach ?>     
                  
        </table> 
    
 </body> 
 </html> 