<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "sistemaregistrofash";
    $port = 3307;

    $conexion = new mysqli($host, $user, $pass, $db, $port);

    if (!$conexion) {
        echo "Conexion fallida";
    }
