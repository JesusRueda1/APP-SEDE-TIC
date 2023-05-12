<?php
    switch ($_SESSION['rol_ingreso']) {
        case 1:
            include('includes/navbar-admin.php');
            break;
        case 2:
            include('includes/navbar.php');
            break;
    }
?>