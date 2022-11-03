<?php 
include('../../../conexion/conexion.php');
$id_articulo = $_POST['id_articulos'];
session_start();
/* $id_articulo = $_SESSION['id_articulo']; */
echo"<script>
        alert('el id de los articulos ingresados en salida es: ',$id_articulo);
    </script>";
include('datetime.php');
$SQL = "UPDATE articulo SET datos_salida='".$hora."' WHERE id='".$id_articulo."';";
$query = mysqli_query($conexion,$SQL);
if ($query) {
    echo "
        <script>
            alert('Hora de salida Actualizada!');
            location.href='../DASHBOARD.php';
        </script>
    ";
}


?>