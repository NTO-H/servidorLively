<?php
require_once('conexion.php');
$nom_user = $_POST['usuario'];
$nom_pass = $_POST['password'];

$myArray = array();
if ($result = $conexion->query("SELECT vchUsuario,vchpassword,foto FROM tbluser WHERE vchUsuario='$nom_user' AND vchpassword='$nom_pass'")) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }

    if (!empty($myArray)) {
        echo json_encode($myArray, JSON_UNESCAPED_UNICODE);
    }
} else {
    echo "Error en la consulta...";
}

$result->close();
$conexion->close();
