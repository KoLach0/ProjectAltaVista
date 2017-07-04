<?php

include_once (FOLDER_PROJECT . "/config/context.php");
require_once (FOLDER_PROJECT . "/model/Usuario.php");



$usuario = new Usuario();
$resultado = $usuario->consultar();




