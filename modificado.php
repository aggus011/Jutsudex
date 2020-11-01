<?php
include ("./conexion.php");
global $conexion;
modificarJutsu($_POST['nro'], $_POST['nombre'], $_POST['tipo'], $_POST['usuario'], $_POST['descripcion']);
function modificarJutsu($nro, $nombre, $tipo, $usuario, $descripcion){
    $sentencia = "UPDATE jutsu SET nombre = '". $nombre ."', tipo = '". $tipo ."', usuario = '" . $usuario ."', descripcion = '". $descripcion ."' WHERE nro = '". $nro ."'";
    global $conexion;
    $conexion->query($sentencia);
}
header("Status: 301 Moved Permanently");
header("Location: index.php?");
exit;