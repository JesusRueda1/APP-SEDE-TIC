<?php

include('../../conexion/conexion.php');
session_start();
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];


echo $nombre." ".$apellido.".";
?>