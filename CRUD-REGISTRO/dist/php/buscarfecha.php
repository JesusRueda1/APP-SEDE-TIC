<?php 

$fecha = $_POST['name'];
$SQL = "SELECT articulo.`usuario`, articulo.`id` as ID, articulo.`id_persona`as id_persona,persona.`nombre`as nombre,persona.`apellido` as apellido,
persona.`documento`as documento,persona.`rol`as rol,`articulo`.`articulo`as articulo,articulo.`fecha`as fecha, articulo.`datos_entrada`as datos_entrada,
articulo.`datos_salida`as datos_salida,articulo.`observaciones`as observaciones , roles.descripcion AS Roles 
FROM articulo 
INNER JOIN persona ON articulo.id_persona=persona.id 
INNER JOIN roles ON persona.rol=roles.id
WHERE fecha='$fecha'";
$query = mysqli_query($SQL);
if(mysqli_num_rows($query)>0){
    while($rs = mysqli_fetch_array($query)){
        $fecha = $rs['fecha'];
    }
}

?>