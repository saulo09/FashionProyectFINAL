<?php

    $host = "localhost";
    $User = "root";
    $pass = "";
    $db = "iniciosesiondb";
    $port = 3307;

    $conexion = new mysqli($host, $User, $pass, $db, $port);

    if ($con) {
     echo "Conexion fallida";
    } 