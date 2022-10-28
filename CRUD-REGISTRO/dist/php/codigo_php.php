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


$SQL6 = "SELECT *,roles.`descripcion` AS roless FROM articulo INNER JOIN persona ON `articulo`.`id_persona`= persona.`id` INNER JOIN roles ON persona.`rol`=roles.`id` WHERE `persona`.`documento`='$docu';";
$query6 = mysqli_query($conexion,$SQL6);
if($query6){
    if($row = mysqli_fetch_array($query6)){
       $nombre = $row['nombre'];
       $apellido = $row['apellido'];
       $articulo = $row['articulo'];
       $id_rol= $row['rol'];
       $rol = $row['roless'];
       $documento = $row['documento'];
    }
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    $_SESSION['articulo'] = $articulo;
    $_SESSION['roless'] = $rol;
    $_SESSION['id_rol'] = $id_rol;
    $_SESSION['documentos'] = $documento;


    header('Location: ../DASHBOARD.php'); 
}else{
    header('Location: ../DASHBOARD.php'); 
}
?>
<!-- <script>
        let mensaje= "se proceso con exito";
                                function ejecutar(){

                                    let doc = $('#document').val();
                                    
                                    
                                    var parametros = 
                                        {
                                            "documento" : doc,
                                        };
                                        alert(`el documento enviado es: ${doc}`);
                                        

                                        $.ajax({
                                            data: parametros,
                                            url: '../DASHBOARD.php',
                                            type: 'GET',
                                            
                                            /* beforesend: function()
                                            {
                                            $('#register').html("Mensaje antes de Enviar");
                                            }, */

                                            success: function(mensaje)
                                            {
                                            $('#register').html(mensaje);
                                            }
                                        });
                                }
                                
</script> -->