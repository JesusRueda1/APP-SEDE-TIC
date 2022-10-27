<?php 
session_start();
$nombreCompleto = $_SESSION['nombre']." ".$_SESSION['apellido'];
include('../../php/validar_sesion.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro de articulos</title>
        <link rel="stylesheet" href="styles/style.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../../bootstrap.trabajo/css/bootstrap.css">
        <!-- <link rel="stylesheet" href="modal/modal.css"> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- jQuery -->
    <script type="text/javascript" 
        src="https://code.jquery.com/jquery-3.5.1.js">
    </script>
  
    <!-- DataTables CSS -->
    <link rel="stylesheet" href=
"https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  
    <!-- DataTables JS -->
    <script src=
"https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
    </script>
    <!-- Estilos de la caja xD -->    
    <style>
        .submit-hv:hover{
            background-color: #47a386;
        }
    </style>
    </head>
    <body class="sb-nav-fixed">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #57a639;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#" style="color: white;"><img src="images/icon_page.png" height="60" alt="Logo de la pagina" /></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown" style="margin-left:1700px;">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuración</a></li> 
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../../php/cerrar_sesion.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="container">
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color:#57a639;">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading" style="color: white;">Core</div>
                            <a style="color: white;" class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon" style="color: white;"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard 
                            </a>
                            <div class="sb-sidenav-menu-heading" style="color: white;">Interface</div>
                            <a style="color: white;" class="nav-link collapsed" href="modal/modal.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon" style="color: white;"><i class="fas fa-columns"></i></div>
                               modales
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="modal/modal.php" style="color: white;">Modal</a>
                                    <a class="nav-link" href="layout-sidenav-light.html" style="color: white;">Light Sidenav</a>
                                </nav>
                            </div>
                            <a style="color: white;" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon" style="color: white;"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a style="color: white;" class="nav-link" href="login.html">Login</a>
                                            <a style="color: white;" class="nav-link" href="register.html">Register</a>
                                            <a style="color: white;" class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html" style="color: white;">401 Page</a>
                                            <a class="nav-link" href="404.html" style="color: white;">404 Page</a>
                                            <a class="nav-link" href="500.html" style="color: white;">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading" style="color: white;">Addons</div>
                            <a class="nav-link" href="charts.html" style="color: white;">
                                <div class="sb-nav-link-icon" style="color: white;"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html" style="color: white;">
                                <div class="sb-nav-link-icon" style="color: white;"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="standar">Conectado como: <br> <?php echo $nombreCompleto."."; ?></div>
                    </div>
                </nav>
            </div>
           <div class="caja"> 
            <header class="header" id="header">
                <figure class="logo">
                  <img src="images/icon_page.png" height="60" alt="Logo de la pagina" />
                </figure>
                <h3 class="text-start">Registro de articulos</h3>
                  
              </header>
            <br/>
            <div class="containter-fluid">
                            <form method="POST">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <input type="text" placeholder="Documento" name="document" id="document">
                                    </div>
                                    <div class="col-lg-1">
                                        <button type="button" id="buscar" onclick="/*click()*/ejecutar()" class="submit submit-hv" style="border-radius:10px;">Buscar</button>
                                        <!-- <input type="submit" name="submit" id="buscar" value="buscar" class="submit submit-hv"style="border-radius:10px;"> -->
                                    </div>
                                </div>
                            </form><br>
                            <div id="register"></div>
                      </div>
            
            <div class="tablita">
                
                        <table class="tabla" id="example">
                            <div class="container-fluid" style="padding:0;margin:0;"> 
                                    <div class="row form-group">
                            </div>
                          <thead>
                            <tr> 
                              <th>Nombre</th> 
                              <th>Apellido</th>
                              <th>Documento</th>
                              <th>Correo</th>
                              <th>Rol</th>
                              <th>Articulo</th>
                              <th>Fecha</th>
                              <th>Datos-Entrada</th>
                              <th>Datos-Salida</th>
                              <th>Accion</th>
                            
                            </tr>
                          </thead>
                            <tbody><?php include('php/consultas.php'); 
                            while($row = mysqli_fetch_array($query)){?>
                            <tr>
                            <td><?php echo $row['nombre'];?></td>
                            <td><?php echo $row['apellido']; ?></td>
                            <td><?php echo $row['documento'];?></td>
                            <td><?php echo $row['correo'];?></td>
                            <td><?php 
                            $rol = $row['rol']; 
                            switch ($rol) {
                                case 1:
                                    echo "administrador";
                                    break;
                                case 2:
                                    echo "vigilante";
                                    break;
                                case 3:
                                    echo "instructor";
                                    break;
                                case 4:
                                    echo "aprendiz";
                                    break;
                                
                                default:
                                    echo "visitante";
                                    break;
                            }?></td>
                            <td><?php echo $row['articulo'];?></td>
                            <td><?php echo $row['fecha'];?></td>
                            <td><?php echo $row['datos_entrada'];?></td>
                            <td><?php echo $row['datos_salida'];?></td>
                            
                                <td>
                                    <input class="submit" type="button" onClick="Editarr(this)" value="Editar" style="border-radius:10px;" >
                                    <input class="submit" type="button" onClick="Borrarr(this)" value="Borrar"style="background-color:red;border-radius:10px;" >
                                </td>

                            </tr>
                            <?php }?>
                            </tbody>
                        </table>
                      </div>
                      <br/>

                      
                      <div>
                        
                    
                </div>
                    
           <footer class="footer" id="footer">
             
           </footer>

          
          
        </div>
    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container px-4">
                        <div class="d-flex align-items-center justify-content-between standar">
                            <div class="text-muted">Copyright &copy; Hecho por Jesús Rueda y Jesús Mosquera</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">SENA</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="../../data-table/datatables.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        
        
        <script>
            /* const open = document.getElementById('open');
            const modal_container = document.getElementById('modal_container');
            const close = document.getElementById('close');
            open.addEventListener('click', () => {
              modal_container.classList.add('show');  
            });
            close.addEventListener('click', () => {
              modal_container.classList.remove('show');
            });  */
            
      const myModal = document.getElementById('myModal')
      const myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', () => {
      myInput.focus()
        })
        </script>
<?php

?>
    <script>
        // Initialize the DataTable
        $(document).ready(function () {
            $('#example').DataTable({
                // Enable the searching
                // of the DataTable
                searching: true
            });
        });
    </script> 
    <script>
        let boton = document.getElementById('buscar');
        let mostrar = document.getElementById('register');
        function click(){
            mostrar.innerHTML = `
                <form action="php/agregar.php" method="POST">                          
                    <div class="caja">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="nom">Nombre</label> <input type="text" id="nom" name="nom" placeholder="Escriba aqui" required class="form-control ">
                            </div>
                            <div class="col-md-3">
                                <label for="ape">Apellido</label> <input type="text" id="ape" name="ape" placeholder="Escriba aqui" required class="form-control ">
                            </div>
                            <div class="col-md-3">
                                <label for="doc">Documento</label> <input type="text" id="doc" name="doc" placeholder="Escriba aqui" required class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                
                                <label for="rol">Rol</label> 
                                <?php 
                                $SQL3 = "SELECT * FROM roles";
                                $query3= mysqli_query($conexion,$SQL3);?>
                                <select name="rol" id="rol" required class="form-control">
                                <option value="">Selecione una opcion...</option>
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
            `;

        }
        boton.onclick = click;
    </script>
    <script>
        let mensaje= "se proceso con exito";
                                function ejecutar(){

                                    let doc = $('#document').val();
                                    
                                    
                                    var parametros = 
                                        {
                                            "documento" : doc,
                                        };
                                        /* alert(`el documento es ${doc}`); */
                                        

                                        $.ajax({
                                            data: parametros,
                                            url: 'php/codigo_php.php',
                                            type: 'POST',
                                            
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
                                
    </script>
    
    </body>
</html>
