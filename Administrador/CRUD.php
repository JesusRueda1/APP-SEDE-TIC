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
</head>
<body>
    <h1>Registrarse</h1>
    <div class="container">
        <form action="" method="post">

        </form>
    </div>
    <div class="container">
    <table class="table table-hover ">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Documento</th>
              <th scope="col">Nombres</th>
              <th scope="col">Apellidos</th>
              <th scope="col">E-mail</th>
              <th scope="col">Rol</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
              <?php
                /* $sql= "SELECT `usuario`.`id`, login.`usuario` AS Usuario, `usuario`.`nombres`,`usuario`.`apellidos`,`usuario`.`tipoDoc`,`usuario`.`Doc`,`usuario`.`Rol` FROM usuario INNER JOIN login ON `usuario`.`id_login`=login.`id`"; */
                $sql= "SELECT * FROM persona";
                $query = mysqli_query($conexion,$sql);
                while($mostrar = mysqli_fetch_array($query)){
              ?>
            <tr>
              <th scope="row"><?php echo $mostrar['id'] ?></th>
              <td><?php echo $mostrar['documento'] ?></td>
              <td><?php echo $mostrar['nombre'] ?></td>
              <td><?php echo $mostrar['apellido'] ?></td>
              <td><?php echo $mostrar['correo'] ?></td>
              <?php 
              if($mostrar['rol'] ==1){
                $roles = "Administrador";
              }else if ($mostrar['rol']==2){
                $roles = "Vigilante";
              }
              ?>
              <td><?php echo $roles ?></td>
              <td><button type="submit" method="post" class="btn btn-primary">Actualizar</button></td>
            </tr>
            <?php
            }
            ?>
           
          </tbody>
      </table>
      <a class="btn btn-primary" href="../portafolio.php" role="button">Ir a la Pagina Principal</a>
    </div>

  
    

    <script src="../bootstrap.trabajo/js/bootstrap.min.js"></script>
</body>
</html>