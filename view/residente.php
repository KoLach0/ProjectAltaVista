<!doctype html>
<html lang="en">

<head>
    <?php
     include_once ("../config/context.php");
        include(FOLDER_VIEW . "/template/head.php");?>
</head>

<body>

    <div class="wrapper">
        <?php include("./template/sidebarresidente.php"); ?>

        <div class="main-panel">

            <?php include("./template/navbar.php"); ?>
            <?php include("./template/contents/profile.php"); ?> 
            <?php include("./template/footer.php"); ?>

        </div>
    </div>

</body>

<?php include("./template/scripts.php"); ?>

</html>