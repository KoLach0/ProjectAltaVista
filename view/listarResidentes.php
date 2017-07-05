<!doctype html>
<html lang="en">

    <head>
        <?php   include_once ("../config/context.php");
        include(FOLDER_VIEW . "/template/head.php");?>
    </head>

    <body>

        <div class="wrapper">
            <?php include("./template/sidebarsecretaria.php"); ?>

            <div class="main-panel">

                <?php include("./template/navbar.php"); ?>
                
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-plain">
                                    <div class="card-header" data-background-color="purple">
                                        <h4 class="title">Lista de Residentes</h4>
                                        <p class="category">Here is a subtitle for this table</p>
                                    </div>
                                    <div class="card-content table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                            <th>Cedula</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Correo Electronico</th>
                                            <th>Estado</th>

                                            </thead>
                                            <tbody>
                                                <?php foreach ($this->model->Listar() as $r): ?>
                                                    <tr>
                                                        <td><?php echo $r->cedula; ?></td>
                                                        <td><?php echo $r->nombre; ?></td>
                                                        <td><?php echo $r->apellido; ?></td>
                                                        <td><?php echo $r->correo; ?></td>
                                                        <td><?php echo $r->estado; ?></td>


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
                
                <?php include("./template/footer.php"); ?>

            </div>
        </div>

    </body>

    <?php include("./template/scripts.php"); ?>

</html>