<?php
require('../../conexion/conexion.php');
$sql = "SELECT * FROM articulo inner join persona on articulo.id_persona=persona.id";
$query = mysqli_query($conexion,$sql);

?>