<?php
include ("conexion.php");
global $conexion;
session_start();
$usuario = $_POST["usuario"];
$contrasenia = $_POST["contrasenia"];
$sql = "SELECT usuario, contrasenia FROM usuario WHERE usuario = '". $usuario ."'";
$resultado = $conexion->query($sql);
$num = $resultado->num_rows;

if($num > 0){
    $row = $resultado->fetch_assoc();
    $contraseniaBd = $row['contrasenia'];
    if($contraseniaBd == $contrasenia){
        $_SESSION['usuario'] = $row['usuario'];
        header("Location: ./index.php");
    }else {
        header("Location: ./iniciar.php");
    }
}else {
    header("Location: ./iniciar.php");
}