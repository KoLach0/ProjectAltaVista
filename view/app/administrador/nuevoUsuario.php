<!doctype html>
<html lang="en">

    <head>
        <?php
        include_once ("../../../config/context.php");
        include(FOLDER_VIEW . "/template/head.php");
      
        ?>
    </head>

    <body>

        <div class="wrapper">
<?php include(FOLDER_VIEW . "/template/sidebar.php"); ?>

            <div class="main-panel">

<?php include(FOLDER_VIEW . "/template/navbar.php"); ?>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header" data-background-color="purple">
                                        <h4 class="title">Nuevo Residente</h4>
                                        <p class="category">Registra un nuevo residente, para solicitar parqueaderos</p>
                                    </div>
                                    <div class="card-content">
                                        <form  action="nuevoUsuario.php" method="get">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Cedula</label>
                                                        <input type="text" name="cedula" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Correo electronico</label>
                                                        <input type="email" name="email" class="form-control" >
                                                    </div>
                                                </div>

                                            </div>
                                            

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nombre</label>
                                                        <input type="text" name="nombre" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Apellidos</label>
                                                        <input type="text" name="apellidos" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>

                                           <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Apartamento</label>
                                                        <input type="text" name="apartamento"  class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Contraseña</label>
                                                        <input type="password" name="contrasena"  class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <input type="text" name="fecha"  maxlength="10" minlength="1" placeholder="Fecha de nacimiento: DD/MM/AAAA" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>


                                            <input type="submit" name="registrar"  class="btn btn-primary pull-right" value="Registrar residente">
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php include(FOLDER_VIEW . "/template/footer.php"); ?>

            </div>
        </div>

    </body>

<?php include(FOLDER_VIEW . "/template/scripts.php"); ?>

</html>