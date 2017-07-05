<div class="sidebar" data-color="purple" data-image= "<?php echo RESOURCES; ?>/img/sidebar-1.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

    Tip 2: you can also add an image using data-image tag
    -->

    <div class="logo">
        <center>
            <img src="<?php echo RESOURCES; ?>/img/logo.png" alt="">
        </center>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">

            <li class="active">
                <a href="user.html">
                    <i class="material-icons">person</i>
                    <p>Mi perfil</p>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">face</i>
                    <span class="notification">Administrador</span>
                    <p class="hidden-lg hidden-md">usuarios</p>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Nuevo Residente</a></li>
                    <li><a href="app/administrador/listarResidentes.php">Ver Residentes</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">account_circle</i>
                    <span class="notification">Registrar Usuarios</span>
                    <p class="hidden-lg hidden-md">usuarios</p>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Nuevo Residente</a></li>
                    <li><a href="#">Ver Residentes</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">motorcycle</i>
                    <span class="notification">Registrar Vehiculos</span>
                    <p class="hidden-lg hidden-md">usuarios</p>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Nuevo Residente</a></li>
                    <li><a href="#">Ver Residentes</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">directions_car</i>
                    <span class="notification">Verificar Parquederos</span>
                    <p class="hidden-lg hidden-md">Notifications</p>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Registrar Vehiculo</a></li>
                    <li><a href="#">Ver Vehiculos</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">local_movies</i>
                    <span class="notification">Parquederos disponibles</span>
                    <p class="hidden-lg hidden-md">parqueaderos</p>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Ver Parqueaderos</a></li>
                    <li><a href="#">Ver estados Parqueaderos</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">attach_money</i>
                    <span class="notification">Verificar Pagos</span>
                    <p class="hidden-lg hidden-md">pagos</p>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Consultar Soportes de pago</a></li>

                    <li><a href="#">Estado Pago</a></li>
                    <li><a href="#">agregar sopore pago pago</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">description</i>
                    <span class="notification">Reportes</span>
                    <p class="hidden-lg hidden-md">parqueaderos</p>
                </a>
                <!-- <ul class="dropdown-menu">
                        <li><a href="#">Generar reporte por mora</a></li>
                        <li><a href="#">Generar reporte por parqueadero</a></li>
                        <li><a href="#">Ver reportes</a></li>
                        
                        
                </ul> -->
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">report_problem</i>
                    <span class="notification">Apartamentos en mora</span>
                    <p class="hidden-lg hidden-md">parqueaderos</p>
                </a>
                <!-- <ul class="dropdown-menu">
                        <li><a href="#">Generar reporte por mora</a></li>
                        <li><a href="#">Generar reporte por parqueadero</a></li>
                        <li><a href="#">Ver reportes</a></li>
                        
                        
                </ul> -->
            </li>



        </ul>
    </div>
</div>