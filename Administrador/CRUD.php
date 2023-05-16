<?php include('../conexion/conexion.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <!-- <link rel="stylesheet" href="css/styles_CRUD.css"> -->
    <link rel="stylesheet" href="../bootstrap.trabajo/css/bootstrap.min.css">
    <link rel="icon" href="../img/icon_page.png">
</head>
<body>

<!--  -->
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg" style="background-color: #57a639; margin: left 50%; color:white ;" >
      <div class="container px-12">
          <a class="navbar-brand" href="#" style="color: white;"><img src="../img/logo_sena_blanco.png" height="50" alt="Logo de la pagina"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item"><a class="nav-link active"  style="color: white;" aria-current="page" href="index.php">Inicio</a></li>
                  <!-- ks -->
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
  
    <div class="container" style="margin-top:5%;">
    <h1>Registro de usuarios</h1>
      <div class="col-sm-12 col-sm-offset-2">
    <!-- <a href="#addnew" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1"><span class="glyphicon glyphicon-plus"></span> Nuevo Usuario</a> -->
      

      
    
    <table class="table table-hover ">
        <thead>
            <tr>
              <th scope="col">Documento</th>
              <th scope="col">Nombres</th>
              <th scope="col">Apellidos</th>
              <th scope="col">E-mail</th>
              <th scope="col">Rol</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <?php include('./include/crud_tbody.php'); ?>
          
      </table>
      <!-- <button class="btn btn-primary">Agregar usuario</button> -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Insertar Registro
      </button>
      <!-- <a class="btn btn-primary" href="../crud-registro/dist/dashboard.php" role="button">Ir a la Pagina Principal</a> -->
      </div>
    </div>

  
    
  <?php include('include/modal.php'); ?>
  <script src="../bootstrap.trabajo/js/bootstrap.min.js"></script>

  <!--  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!--  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Scripts propios -->
  <script src="js/scripts.js"></script>
  <script src="./js/modal_crud.js"></script>
  <script src="./js/crud.js"></script>
</body>
</html>