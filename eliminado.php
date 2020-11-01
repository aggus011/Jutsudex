<?php
include ("./conexion.php");
$consulta = eliminarJutsu($_GET['nro']);

function eliminarJutsu($nro){
    global $conexion;
    $sentencia = "DELETE FROM jutsu WHERE nro = '". $nro ."'";
    $resultado = $conexion->query($sentencia);
}
header("Status: 301 Moved Permanently");
header("Location: index.php?");
exit;