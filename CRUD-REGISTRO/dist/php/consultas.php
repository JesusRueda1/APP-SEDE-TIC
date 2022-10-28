<?php
require('../../conexion/conexion.php');
$sql = "SELECT articulo.`id`,articulo.`id_persona`,persona.`nombre`,persona.`apellido`,persona.`documento`,persona.`rol`,`articulo`.`articulo`,articulo.`fecha`,articulo.`datos_entrada`,articulo.`datos_salida`,articulo.`observaciones` FROM articulo INNER JOIN persona ON articulo.id_persona=persona.id;";
$query = mysqli_query($conexion,$sql);

?>