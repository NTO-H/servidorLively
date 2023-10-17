<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'bdlogin';
    
    $conexion = new mysqli($host, $username, $password, $database);
    
    if($conexion->connect_errno){
        
        echo 'No se pudo conectar con el servidor';
        exit;
    }
