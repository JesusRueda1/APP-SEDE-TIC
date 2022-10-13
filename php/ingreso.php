<?php
require('../conexion/conexion.php');
session_start();
$_SESSION['login'] = true;
$user = $_POST['username']; 
$pass = $_POST['password']; 
if(!$user=="" && !$pass==""){
    $SQL = "SELECT * FROM persona 
    WHERE documento=".$user.""; 
    $query = mysqli_query($conexion,$SQL);
    if($query){
        while($row = mysqli_fetch_array($query)){
            $id = $row['id']; 
            $rol = $row['rol']; 
            $name = $row['nombre']; 
            $apellido = $row['apellido']; 
            $pass2 = $row['contraseña'];
        }
        

            if(password_verify($pass, $pass2)){
                // Codigo para entrar 
            
                $_SESSION['id'] = $id;
                $_SESSION['nombre'] = $name;
                $_SESSION['apellido'] = $apellido;

                switch ($rol) {
                    case 1:
                        header('location: ../CRUD-REGISTRO/dist/DASHBOARD.php');
                        break;
                    case 2:
                        //header('location: standar.php'); 
                        break;
                    case 3:
                        // header('location: tercerrol.php'); 
                        break;
                    default:
                        echo "
                        <script>
                            alert('Error: no tiene rol asignado, comuniquese con el administrador!');
                        </script>    
                        ";
                        break;
                }
            }else{
                echo "
                    <script>
                        alert('Contraseña incorrecta, intente nuevamente!!');
                        location.href='../index.php';
                    </script>
                    ";
            }
    }else{
        echo "
        <script>
            alert('El usuario no existe en el sistema');
        </script>";
    }
}else{
    echo "
    <script>
        alert('Error: Los campos están vacios, llene todos los campos para ingresar!!');
    </script>"; 
}

?>