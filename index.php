<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="resource/css/bootstrap.css" integrity="" crossorigin="">
        <!-- Optional theme -->
        <link rel="stylesheet" href="resource/css/bootstrap-theme.min.css" integrity="" crossorigin="">

        <title>Inicio Sesion</title>
        <script type="text/javascript">
                               window.onbeforeunload = function (e) {
                    var e = e || window.event;
                               if (e) {
                                 e.returnValue = 'Se perderan todos los datos que no hayas guardado';
                               }
                }
 
                </script>
               
    </head>
    <body class="login-fondo">
        <div class="container">
            <div class="login">
                <div class="jumbotron">
                    <h3>Inicio sesion</h3>
                    <form action="Componentes/Controlador/inicioSesion.php" method="post">
                        <div class="row">
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario">
                            </div>
                            <div class="form-group">
                                <label for="clave">Clave</label>
                                <input type="password" class="form-control" name="clave"id="clave" placeholder="clave">
                            </div>   
                        </div>
                        <button type="submit" name="ingresar" id="ingresar" class="btn btn-info">Ingresar</button>
                        <a href="Componentes/Vistas/paginasGenerales/Registros_personas.php">Registro</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
