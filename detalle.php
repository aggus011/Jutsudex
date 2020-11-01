<?php
include("conexion.php");
$consulta = consultarJutsu($_GET['nro']);
$consultaTipo = consultarTipo($consulta[2]);

function consultarJutsu($nro)
{
    global $conexion;
    $sentencia = "SELECT * FROM jutsu WHERE nro = '" . $nro . "'";
    $resultado = $conexion->query($sentencia);
    $row = mysqli_fetch_array($resultado);
    return [
        $row['nro'],
        $row['nombre'],
        $row['tipo'],
        $row['descripcion'],
        $row['usuario'],
        $row['img_url']
    ];
}
    function consultarTipo($tipo){
        global $conexion;
        $sentencia = "SELECT * FROM tipo_jutsu WHERE tipo = '". $tipo."'";
        $resultado = $conexion->query($sentencia);
        $row = mysqli_fetch_array($resultado);
        return $row['img'];
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle</title>
    <?php include("./Recursos/templates/bootstrap.php"); ?>
    <link rel="stylesheet" href="Recursos/css/general.css">
    <link rel="stylesheet" href="Recursos/css/agregar.css">
    <link rel="stylesheet" href="Recursos/css/detalle.css">
</head>
<?php include("./Recursos/templates/header.php"); ?>
<body>
    <h1><?php echo $consulta[1] ?></h1>
    <nav class="img-centro">
    <img src="./Recursos/<?php echo $consulta[5] ?>" class="img-fluid" alt="Responsive image">
    </nav>
    <div class="contenedor-detalle">
        <img src="./Recursos/<?php echo $consultaTipo ?>" style="width: 10%">
        Usuarios: <?php echo $consulta[4] ?>
    </div>
<br>
<h2>DESCRIPCION</h2>
<?php echo "<p class='descripcion'>" . $consulta[3] . "</p>"?>
</body>
</html>