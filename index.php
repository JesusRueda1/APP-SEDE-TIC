<!DOCTYPE html>
<html lang="es">
<head>
    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login_regist.css">

    <style type="text/css">
        .backgroundFondo {
            background: url('assets/images/fondo.jpg') no-repeat center top;
            background-size: cover;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php // include('msjs.php');?>
    <div class="container"> 
        <div class="world-latest-articles">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="form border">
                        <div id="signup">
                            <h1 class="text-center" style="color: #333; font-weight: bold;">Iniciar Sesión</h1>
                            <form id="soloNumeros" action="php/ingreso.php" method="post">
                                <div class="field-wrap">
                                    <label>Nro de documento</label>
                                    <input type="text" name="username" required autocomplete="off">
                                </div>
                                <div class="field-wrap">
                                    <label>Contraseña</label>
                                    <input type="password" name="password" required autocomplete="off"/>
                                </div>
                                <input type="submit" class="button button-block mb-3 mt-5 miBtn mt-3" value="ENTRAR"/>
                                <!-- <a href="#" id="olvidar" title="Recuperar Clave">Recuperar Clave</a> -->
                                <br><br>          
                            </form>
                        </div>
                        <div id="recuperarclave">
                            <h1 class="text-center mb-5 recuperarPass">Recuperar Contraseña</h1>
                            <form action="#" method="post">
                                <div class="field-wrap">
                                    <label>Nro de Documento</label>
                                    <input type="number" name="Doc" required autocomplete="off"/>
                                </div>
                                <input type="submit" class="button button-block miBtn mt-5" value="RECUPERAR CLAVE"/>
                                <a href="#" id="volver" class="mt-3 mb-4" title="Volver">Volver</a>
                                <br><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/index.js"></script>
</body>
</html>
