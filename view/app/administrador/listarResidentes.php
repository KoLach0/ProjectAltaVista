<!doctype html>
<html lang="en">

    <head>
        <?php
        include_once ("../../../config/context.php");
        include(FOLDER_VIEW . "/template/head.php");
        require_once (FOLDER_PROJECT . "/controller/usuarioController.php");
        ?>
    </head>

    <body>

        <div class="wrapper">
            <?php include(FOLDER_VIEW . "/template/sidebarsecretaria.php"); ?>

            <div class="main-panel">

                <?php include(FOLDER_VIEW . "/template/navbar.php"); ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header" data-background-color="purple">
                                        <h4 class="title">Tabla Usuarios</h4>
                                        <p class="category">Estos son los usuarios del sistema</p>
                                    </div>
                                    <div class="card-content table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Estado</th>
                                            <th></th>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($resultado as $r): ?>
                                                    <tr>
                                                        <td><?php echo $r['cedula']; ?></td>
                                                        <td><?php echo $r['nombre']; ?></td>
                                                        <td><?php echo $r['apellido']; ?></td>
                                                        <td><?php echo $r['correo']; ?></td>

                                                        <td class="text-primary"><?php echo $r['estado']; ?></td>
                                                        <td class="text-primary">
                                                            <button class="btn btn-primary">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                            <button class="btn btn-primary">
                                                                <i class="fa fa-close"></i>
                                                            </button>
                                                            <button class="btn btn-primary">
                                                                <i class="material-icons">local_movies</i>
                                                            </button>
                                                            <button class="btn btn-primary">
                                                                <i class="fa fa-lock"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>

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

    <?php   
        include(FOLDER_VIEW . "/template/scripts.php");?>

</html>