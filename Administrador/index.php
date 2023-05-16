<?php session_start();
 include('../php/validar_admin.php'); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>INICIO-SENA</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../img/icon_page.png">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="../bootstrap.trabajo/css/bootstrap.min.css">
        <script src="../bootstrap.trabajo/js/bootstrap.min.js"></script>
    </head>
    <body>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg" style="background-color: #57a639; margin: left 50%; color:white ;" >
            <div class="container px-12">
                <a class="navbar-brand" href="#" style="color: white;"><img src="../img/logo_sena_blanco.png" height="50" alt="Logo de la pagina"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active"  style="color: white;" aria-current="page" href="CRUD.php">Personal</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: white;" href="Pages/articulos.php">Articulos</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: white;" href="Pages/añadirRoles.php">Roles</a></li>
                    </ul>
                </div>
            </div>
            <a style="margin-right:15px;" class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../configuracion/cambiar_contraseña.php">Cambiar contraseña</a></li> 
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="../php/cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
            
        </nav>
 
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
