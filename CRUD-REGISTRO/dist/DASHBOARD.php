<?php 
session_start();
$nombreCompleto = $_SESSION['nombre']." ".$_SESSION['apellido'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link rel="stylesheet" href="styles/style.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../../bootstrap.trabajo/css/bootstrap.css">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #57a639;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html" style="color: white;">Logo</a>
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
                            <a style="color: white;" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon" style="color: white;"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html" style="color: white;">Static Navigation</a>
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
                  <nav class="menu">
                    <ol>
                      <li>
                        <a class="link" href="#footer">Acerca de</a>
                      </li>
                      <li>
                        <a class="link" href="#header">CRUD</a>
                      </li>
                    </ol>
                  </nav>
              </header>
            <br/>
                    <form onsubmit="event.preventDefault();onSubmit();" autocomplete="off">
                      <div class="tablita">
                        <table class="tabla" id="tabla">
                          <thead>
                            <tr> 
                              <th>Nombre</th> 
                              <th>Apellido</th>
                              <th>Documento</th>
                              <th>Correo</th>
                              <th>Rol</th>
                              <th>Articulo</th>
                              <th>Datos-Entrada</th>
                              <th>Datos-Salida</th>
                              <th>Accion</th>
                            
                            </tr>
                          </thead>
                            <tbody>
              
                            </tbody>
                        </table>
                      </div>
                      <br/>
                      <br/>
                      <div class="container"> 
                      <div class="caja">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="nom">Nombre</label> <input type="text" id="nom" placeholder="Escriba aqui" required class="form-control ">
                            </div>
                            <div class="col-md-3">
                                <label for="ape">Apellido</label> <input type="text" id="ape" placeholder="Escriba aqui" required class="form-control ">
                            </div>
                            <div class="col-md-3">
                                <label for="doc">Documento</label> <input type="text" id="doc" placeholder="Escriba aqui" required class="form-control ">
                            </div>
                            <div class="col-md-3">
                                <label for="mail">Correo</label> <input type="text" id="mail" placeholder="Escriba aqui" required class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="rol">Rol</label> <input type="text" id="rol" placeholder="Escriba aqui" required class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="articulo">Articulo</label> <input type="text" id="articulo" placeholder="Escriba aqui" required class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="dSalida">Hora-Salida</label> <input type="time" id="dSalida" placeholder="Escriba aqui" required class="form-control">
                            </div>
                        </div>
                    
                    </div>
                      <br/>
                      <input class="submit" type="submit" value="Escribir">
                      </form>
                <br/>
                <br/>
                </div>
           <footer class="footer" id="footer">
             
           </footer>

          <script type="text/javascript" src="js/crud.js"></script>
        </div>
    </div>




                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between standar">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
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
    </body>
</html>
