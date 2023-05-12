<?php
    session_start();
    $nombreCompleto = $_SESSION['nombre_ingreso']." ".$_SESSION['apellido_ingreso'];
    $doc = null;$nombre = null;$apellido = null;$rol = null;$id_rol = null;$documentos=null;
    if(!empty($_SESSION['documento']) && !empty($_SESSION['documentos']) && !empty($_SESSION['nombre']) && !empty($_SESSION['apellido']) && !empty($_SESSION['roless']) && !empty($_SESSION['id_rol'])){
        $doc = $_SESSION['documento'];
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];
        $rol = $_SESSION['roless'];
        $id_rol = $_SESSION['id_rol'];
        $documentos = $_SESSION['documentos'];
    }
?>