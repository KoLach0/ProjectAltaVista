<!doctype html>
<html lang="en">

    <head>
        <?php 
        include_once ("../../../model/Usuario.php");
        include_once ("../../../config/context.php");
        include(FOLDER_VIEW ."/template/head.php");
        $user = new Usuario;
        ?>
    </head>

    <body>

        <div class="wrapper">
            <?php include(FOLDER_VIEW . "/template/sidebarsecretaria.php"); ?>

            <div class="main-panel">

                <?php include(FOLDER_VIEW."/template/navbar.php"); ?>
                
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
                                                <?php $pdo = new PDO('mysql:host=localhost;dbname=altavista;charset=utf8', 'root', '');
                                                foreach ($pdo->query("SELECT * FROM usuarios") as $r): ?>
                                                    <tr>
                                                        <td><?php echo $r[0]; ?></td>
                                                        <td><?php #echo $r->nombre; ?></td>
                                                        <td><?php #echo $r->apellido; ?></td>
                                                        <td><?php #echo $r->correo; ?></td>
                                                        <td><?php #echo $r->estado; ?></td>
                                                        <td><?php #echo $r->contrasena; ?></td>


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
                
                <?php include(FOLDER_VIEW."/template/footer.php"); ?>

            </div>
        </div>

    </body>

    <?php include(FOLDER_VIEW."/template/scripts.php"); ?>

</html>