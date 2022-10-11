<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.trabajo/css/bootstrap.min.css">
   <link rel="stylesheet" href="personal-css/boby.css"> 
   <title>Login</title>
</head>
<body>
    
    <form method="post" action="php/ingreso.php">
       
    <div class="container">
            <div class="text-center">
                <img src="img/sena.png">
            </div>
        <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="">
                            <div class="col-xs-12 text-center">
                                <a href="#" class="active" id="login-form-link">Iniciar sesión</a>
                            </div>
                            
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Recordarme</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Iniciar sesión" style="background-color: #57a639;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="" class="forgot-password">¿Has olvidado tu contraseña?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    </form>
</body>
</html>