<?php
session_start();
$docu = $_POST['documento'];  
$_SESSION['documento'] = $docu;
//$docu=null;
/* if(!empty($docu)){
} */
include('../../../conexion/conexion.php');?>

<!-- <input type="hidden" value="$docu" id='document'> -->

<?php
/* echo "el documento es: ". $docu; */


echo $SQL6 = "SELECT *,roles.`descripcion` AS roless FROM persona INNER JOIN roles ON persona.`rol`=roles.`id` WHERE `persona`.`documento`='$docu';";
$query6 = mysqli_query($conexion,$SQL6);
if($query6){
    if($row = mysqli_fetch_array($query6)){
       $nombre = $row['nombre'];
       $apellido = $row['apellido'];
       $id_rol= $row['rol'];
       $rol = $row['roless'];
       $documento = $row['documento'];
    }
    echo "\n". $_SESSION['nombre'] = $nombre;
    echo "\n". $_SESSION['apellido'] = $apellido;
    echo "\n". $_SESSION['roless'] = $rol;
    echo "\n". $_SESSION['id_rol'] = $id_rol;
    echo "\n". $_SESSION['documentos'] = $documento;


    header('Location: ../DASHBOARD.php'); 
}else{
    header('Location: ../DASHBOARD.php'); 
}
?>