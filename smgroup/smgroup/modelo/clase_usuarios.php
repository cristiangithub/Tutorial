<?php  

require_once "conexion.php"; 
session_start();

class usuariosModelo extends Conect 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_usuarios() 
    { 
        $resultado = $this->_db->query('SELECT * FROM usuarios'); 
         
        $usuarios = $resultado->fetch_all(MYSQLI_ASSOC); 
         
        return $usuarios; 
    } 

     public function registrar_usuario($nombre, $apellidos, $telefono, $correo, $contrasena, $tipoUsuario)
     {
         $sql = $this->_db->query("INSERT INTO usuarios(nombre,apellidos,telefono, correo, contrasena, tipo_usuario)
             VALUES('$nombre','$apellidos','$telefono', '$correo', '$contrasena', '$tipoUsuario')");
            
              echo "Registro exitoso";
     }

      public function login_usuario($nombre, $contrasena, $tipoUsuario)
        {
            
            $fila = $this->_db->query("SELECT * FROM usuarios WHERE nombre='$nombre' && contrasena='$contrasena' && tipo_usuario='$tipoUsuario'");
        }  

        public function sessionUsuarios($nombre, $tipoUsuario)
        {

      
           $valSession = $this->_db->query("SELECT * FROM usuarios WHERE nombre='$nombre' AND tipo_usuario='$tipoUsuario'");
        
            if($iniSession= mysqli_fetch_array($valSession))
            {
                
                $rol = $iniSession['tipo_usuario'];

                switch ($rol) {
                      case 'cliente':
                        $_SESSION['nombre'] = $iniSession['nombre'];
                          header("Location: http://localhost/smgroup/clientevista/index_cliente.php");
                         break;
                    
                       case "admin":
                       $_SESSION['nombre'] = $iniSession['nombre'];
                           header("Location: http://localhost/smgroup/adminvista/index_admin.php");
                          break;
                }
            }else{
                echo "Noexiste";
            } 
        }

        public function set_registrar_cita($nombre, $nombreCita)
        {
          
           $result_cita = $this->_db->query("UPDATE usuarios SET nombre_cita='$nombreCita'  WHERE nombre='$nombre'");
          
          echo" MODIFICACIÓN EXITOSA".$nombre."-".$nombreCita;
      }
} 

  ?> 

