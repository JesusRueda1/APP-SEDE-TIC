<?php
session_start();
$docu = $_POST['documento'];  
$_SESSION['documento'] = $docu;
//$docu=null;
/* if(!empty($docu)){
} */
include('../../../conexion/conexion.php');?>

<!-- <input type="hidden" value="$docu" id='document'> -->

<?php
/* echo "el documento es: ". $docu; */


echo $SQL6 = "SELECT *,roles.`descripcion` AS roless FROM persona INNER JOIN roles ON persona.`rol`=roles.`id` WHERE `persona`.`documento`='$docu';";
$query6 = mysqli_query($conexion,$SQL6);
if($query6){
    if($row = mysqli_fetch_array($query6)){
       $nombre = $row['nombre'];
       $apellido = $row['apellido'];
       $id_rol= $row['rol'];
       $rol = $row['roless'];
       $documento = $row['documento'];
    }
    /* $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    $_SESSION['roless'] = $rol;
    $_SESSION['id_rol'] = $id_rol;
    $_SESSION['documentos'] = $documento; */
?>
<form action="php/agregar.php" method="POST">                          
    <div class="caja">
        <div class="row">
            <div class="col-md-3">
                <label for="nom">Nombre</label> <input type="text" id="nom" name="nom" placeholder="Escriba aqui" required class="form-control" value="<?php echo $nombre?>">
            </div>
            <div class="col-md-3">
                <label for="ape">Apellido</label> <input type="text" id="ape" name="ape" placeholder="Escriba aqui" required class="form-control" value="<?php echo $apellido?>">
            </div>
            <div class="col-md-3">
                <label for="doc">Documento</label> <input type="text" id="doc" name="doc" placeholder="Escriba aqui" required class="form-control " value="<?php echo $documento?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="rol">Rol</label> 
                <?php 
                switch ($id_rol) {
                    case 1:
                        $rol ="administrador";
                        break;
                    case 2:
                        $rol="vigilante";
                        break;
                    case 3:
                        $rol="instructor";
                        break;
                    case 4:
                        $rol="aprendiz";
                        break;
                    default:
                        $rol="visitante";
                        break;
                }
                $SQL3 = "SELECT * FROM roles";
                $query3= mysqli_query($conexion,$SQL3);?>
                <select name="rol" id="rol" required class="form-control">
                <option value="">Selecione una opcion...</option>
                <option selected value="<?php echo $id_rol; ?>"><?php echo $rol; ?></option>
                <?php while($row = mysqli_fetch_array($query3)){?>
                    <option value="<?php echo $row['id']; ?>"><?php  echo $row['descripcion']; ?></option>
                    <?php } ?>
                    </select>
            </div>
            <div class="col-md-3">
                <label for="articulo">Articulo</label> <input type="text" id="articulo" name="articulo" placeholder="Escriba aqui" required class="form-control">
            </div>
            <div class="col-md-3">
                <label for="obs">Observaciones</label>
                <textarea name="obs" id="obs" cols="28" rows="5" placeholder="Escriba aqui" required class="form-control"></textarea>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <input class="submit submit-hv" type="submit" value="Guardar" style="border-radius:10px;">
                </div>
            </div>
        </div>
    </div>
</form>  

<?php
    header('Location: ../DASHBOARD.php'); 
}else{
    header('Location: ../DASHBOARD.php'); 
}
?>