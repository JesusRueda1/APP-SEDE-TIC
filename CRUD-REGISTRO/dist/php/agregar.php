<?php
include('../../conexion/conexion.php');
include('php/datetime.php');
$nombre = $_POST['nom'];
$apellido= $_POST['ape'];
$Doc = $_POST['doc'];
$email = $_POST['mail'];
$articulo = $_POST['articulo'];
$observaciones = $_POST['obs'];

$SQL="SELECT * FROM persona WHERE nombre='$nombre'";
$query=mysqli_query($conexion,$SQL);
if($rs = mysqli_fetch_array($query)){
    $id = $rs['id'];
}
$SQL2 = "INSERT INTO `articulo` (`id_persona`, `articulo`, `fecha`, `datos_entrada`, `datos_salida`, `observaciones`) VALUES ($id, '$articulo', $fecha,$hora , NULL, '$observaciones') ";
$query2 = mysqli_query($conexion,$SQL2);
if($query){
    if ($query2) {
        echo"
            <script>
                alert('el articulo fue ingresado con exito');
                location.href='../DASHBOARD.php';
            </script>
        ";
    }else{

    }
}else{
    echo"
        <script>
            alert('La persona no esta en la base de datos ingresela!');
        </script>
    ";
}
?>