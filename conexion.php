<?php
$archivoConfig = "./Recursos/config.ini";
$configuracion = parse_ini_file($archivoConfig, true);
$host = $configuracion["bd"]["host"];
$usuario = $configuracion["bd"]["usuario"];
$clave = $configuracion["bd"]["password"];
$bd = $configuracion["bd"]["bd"];
$conexion = new mysqli($host, $usuario, $clave, $bd);
if($conexion->connect_error){
    die("ha ocurrido un error");
}
