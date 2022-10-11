<?php
require('../conexion/conexion.php');
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];
$pass2 = $pass;

$password = password_hash($pass, PASSWORD_DEFAULT);
if(!$user==""){
    if(!$pass==""){
        if(password_verify($pass2, $password)){
            /* Codigo para entrar */
        
            $SQL = "SELECT * FROM persona WHERE persona.`contraseña`='".$pass."' AND persona.`documento`=".$user.";";
            $query = mysqli_query($conexion,$SQL);
            
            while($row = mysqli_fetch_array($query)){
                $id = $row['id'];
                $rol = $row['rol'];
                $name = $row['nombre'];
            }
            $_SESSION['name'] = $name;
        }

        if($rol == 1){
            header('location: ../CRUD-REGISTRO/dist/DASHBOARD.php');
        }else if($rol == 2){
            /* header('location: standar.php') */;
        }else{
            echo "
            <script>
                alert('Error: no tiene rol asignado, comuniquese con el administrador!');
            </script>    
            ";
        }
        
        $_SESSION['id'] = $id;
    }else{
        echo "
        <script>
            alert('Error: Ingrese su contraseña');
        </script>
        ";
    }
}else{
    echo "
    <script>
        alert('Error: Ingrese su usuario');
    </script>";
}

?>