<?php 
include('../../../conexion/conexion.php');
$id_articulo = $_POST['id_articulo'];
session_start();
/* $id_articulo = $_SESSION['id_articulo']; */

include('datetime.php');
$SQL = "UPDATE articulo SET datos_salida='".$hora."' WHERE id='".$id_articulo."';";
$query = mysqli_query($conexion,$SQL);
if ($query) {
    echo $id_articulo;
    echo "
        <script>
            alert('Hora de salida Actualizada!');
            //location.href='../DASHBOARD.php';
        </script>
    ";
}


?>