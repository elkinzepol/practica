<?php

    require_once "./config/APP.php";
    require_once "./controladores/vistasControlador.php";

    //instanciar cotrolador de la clase vista controlador para obtener plantilla
    $plantilla = new vistasControlador();
    //utilizar controlador 
    $plantilla -> obtener_plantilla_controlador();