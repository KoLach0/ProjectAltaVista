<!doctype html>
<html lang="en">

    <head>
        <?php include_once ("../config/context.php");
        include(FOLDER_VIEW . "/template/head.php");
        ?>
    </head>

    <body>

        <div class="wrapper">
<?php include(FOLDER_VIEW . "/template/sidebarsecretaria.php"); ?>?>

            <div class="main-panel">

                <?php include(FOLDER_VIEW . "/template/navbar.php"); ?>
                <?php include(FOLDER_VIEW . "/template/contents/tableadministrador.php"); ?> 
<?php include(FOLDER_VIEW . "/template/footer.php"); ?>

            </div>
        </div>

    </body>

<?php include(FOLDER_VIEW . "/template/scripts.php"); ?>

</html>