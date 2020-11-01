<?php
include ("./conexion.php");
$consulta = ConsultarProducto($_GET['nro']);

function ConsultarProducto($nro){
    global $conexion;
    $sentencia = "SELECT * FROM jutsu WHERE nro = '".$nro."'";
    $resultado = $conexion->query($sentencia);
    $row = mysqli_fetch_array($resultado);
    return [
        $row['nro'],
        $row['nombre'],
        $row['img_url']
    ];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar</title>
    <?php include("./Recursos/templates/bootstrap.php"); ?>
    <link rel="stylesheet" href="Recursos/css/general.css">
    <link rel="stylesheet" href="Recursos/css/agregar.css">
</head>
<?php include("./Recursos/templates/header.php"); ?>
<body>
<h1>Eliminar jutsu</h1>
<div class="img-centro">
<img src="./Recursos/<?php echo $consulta[2] ?>" alt="jutsu" class="img-thumbnail">
</div>
<div class="alert alert-danger" role="alert">
    Estas por <a href="#" class="alert-link">eliminar permanentemente </a>el jutsu '<?php echo $consulta[1] ?>'
</div>
<nav class="btn">
    <form action="./eliminado.php?nro=<?php echo $consulta[0] ?>" method="POST">
        <button type="submit" class="btn btn-danger" >Eliminar</button>
    </form>
</nav>
</body>
</html>
