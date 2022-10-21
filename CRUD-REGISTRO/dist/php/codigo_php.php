<?php
session_start();
include ('../../../conexion/conexion.php');
$doc = $_POST['documento'];
$_SESSION['docu'] = $doc;

$SQL = "SELECT * FROM articulo INNER JOIN persona on articulo.id_persona=persona.id WHERE persona.documento=$doc";
$query = mysqli_query($conexion,$SQL);

if(mysqli_num_rows($query)>0){
    /* echo "
    <script>
        alert('modal true');
    </script>
    "; */
    include('../modal/modal1.php');
}else{
    /* echo "
    <script>
        alert('modal false');
    </script>
    "; */
    include('../modal/modal.php');
}

?>