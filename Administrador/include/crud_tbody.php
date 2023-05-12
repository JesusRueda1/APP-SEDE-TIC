<tbody>
    <?php
        /* $sql= "SELECT `usuario`.`id`, login.`usuario` AS Usuario, `usuario`.`nombres`,`usuario`.`apellidos`,`usuario`.`tipoDoc`,`usuario`.`Doc`,`usuario`.`Rol` FROM usuario INNER JOIN login ON `usuario`.`id_login`=login.`id`"; */
        $sql= "SELECT *,roles.`descripcion` AS Roles FROM persona INNER JOIN roles ON `persona`.`rol`= roles.`id`";
        $query = mysqli_query($conexion,$sql);
        while($rs = mysqli_fetch_array($query)){
            $id = $rs['id'];
            $id_rol = $rs['rol'];
            $rol_name = $rs['Roles'];
        }
        $SQL2 = "SELECT *,persona.id AS id_persona,roles.`descripcion` AS Roles FROM persona INNER JOIN roles ON `persona`.`rol`= roles.`id` WHERE rol='1' OR rol='2';";
        $query2 = mysqli_query($conexion,$SQL2);
        while($mostrar = mysqli_fetch_array($query2)){
    ?>
    <tr>
        <td><?php echo $mostrar['documento'] ?></td>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['apellido'] ?></td>
        <td><?php echo $mostrar['correo'] ?></td>
        <td><?php echo $mostrar['Roles'] ?></td>
        <?php if ($mostrar['Roles']=="administrador") {?>
        <td>
            <a href="#" class="btn btn-secondary" readonly>No Disponible</a>
        </td>
        <?php }else{ ?>
        <td>
            <a href="" class="btn btn-danger borrar" borrar-id="<?php echo $mostrar['id_persona'] ?>"> <span class="glyphicon glyphicon-trash"></span> Borrar</a>
        </td>
        <?php } ?>
    </tr>
    <?php } ?>

</tbody>