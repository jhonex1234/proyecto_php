<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Resource/css/bootstrap.css" integrity="" crossorigin="">
        <link rel="stylesheet" href="Resource/css/bootstrap-theme.min.css" integrity="" crossorigin="">
        <title>Pruebas usuario</title>
      
        <script type="text/javascript">
                window.onbeforeunload = function (e) {
                    var e = e || window.event;
                if (e) {
                       e.returnValue = 'Se perderan todos los datos que no hayas guardado';
                      }
                }
        </script>
               
    </head>
    <body class="sesion-usuario-fondo">
        <?php
        // put your code here
        ?>
        <div class="container">
            <div class="jumbotron">
                 <div>
                    
                    <!-- Nav tabs -->
                    <ul class="nav nav-tab" role="tablist">
                        <!-- <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Inicio</a></li> -->
                        <!-- <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Inventario Disponible</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Gestion Solicitudes</a></li> -->
                      <!--   <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle= "tab" desactive>Mi Sesion</a></li> -->    
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <form action="Componentes/controlador/controlador.php" method="post">
                        
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <h1 ALIGN=center>Bienvenido a Usuario!</h1>
                                <p ALIGN=center>
                                    <a type="button" class="btn btn-info" data-toggle="tooltip" href="Componentes/vista/index_prueba.php" data-placement="top" title="Te iras a otro lado">Salir de esta Pagina</a> 
                            </div>
                        </form>    
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <p></p>
                            <br>
                            <p></p>
                            <p ALIGN=center>
                                <a type="button" class="btn btn-info" data-toggle="tooltip" href="paginasGenerales/GestionUsuario/inventario_despliegue.php" data-placement="top" title="Te iras a otro lado">Ver Existencias</a>
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                             <p></p>
                            <br>
                            <p></p>
                            <p ALIGN=center>
                                <a type="button" class="btn btn-info" data-toggle="tooltip" href="paginasGenerales/GestionUsuario/Solicitudes_talleres.php" data-placement="top" title="Te iras a otro lado">Ver Solicitudes</a>
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                            <p></p>
                            <br>
                            <p></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <a type="button" class="btn btn-success" data-toggle="tooltip" href="paginasGenerales/cerrarSesion.php" data-placement="top" title="Volveras Al Inicio">Cerrar Sesion</a>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" title="cambiar Configuraciòn">
                                        Modificar Perfil
                                    </a>
                                    <div class="collapse" id="collapseExample">
                                        <div class="well">
                                            formulario
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
               
            </div>
        </div>
        <script src = "http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="Resource/js/bootstrap.min.js"></script>
        <script src="Resource/js/responsive.js"></script>
        <script src="Resource/js/mimenu.js"></script>
    </body>
</html>
