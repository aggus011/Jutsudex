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
        $row['tipo'],
        $row['usuario'],
        $row['descripcion']
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
    <title>Modificar</title>
    <?php include("./Recursos/templates/bootstrap.php"); ?>
    <link rel="stylesheet" href="Recursos/css/general.css">
    <link rel="stylesheet" href="Recursos/css/agregar.css">
</head>
<?php include("./Recursos/templates/header.php"); ?>
<body>
<h1>Modifica el jutsu</h1>
<div class="contenedor">
    <form action="modificado.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nro">Nro</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="nro" value="<?php echo $consulta[0] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="nombre" value="<?php echo $consulta[1] ?>">
        </div>
        <label>Tipo</label><br>
            <?php
            if($consulta[2]=='ninjutsu'){
                echo "<div class='form-check'>
                    <input class='form-check-input' type='radio' name='tipo' id='exampleRadios1' value='ninjutsu' checked>
                    <label class='form-check-label' for='exampleRadios1'>
                        Ninjutsu
                    </label>
                </div>
                <div class='form-check'>
                    <input class='form-check-input' type='radio' name='tipo' id='exampleRadios2' value='genjutsu'>
                    <label class='form-check-label' for='exampleRadios2'>
                        Genjutsu
                    </label>
                </div>
                <div class='form-check'>
                    <input class='form-check-input' type='radio' name='tipo' id='exampleRadios3' value='taijutsu'>
                    <label class='form-check-label' for='exampleRadios2'>
                        Taijutsu
                    </label>
                </div>";
            }elseif ($consulta[2] == 'genjutsu'){
                echo "<div class='form-check'>
                        <input class='form-check-input' type='radio' name='tipo' id='exampleRadios1' value='ninjutsu'>
                        <label class='form-check-label' for='exampleRadios1'>
                            Ninjutsu
                        </label>
                    </div>
                    <div class='form-check'>
                        <input class='form-check-input' type='radio' name='tipo' id='exampleRadios2' value='genjutsu' checked>
                        <label class='form-check-label' for='exampleRadios2'>
                            Genjutsu
                        </label>
                    </div>
                    <div class='form-check'>
                        <input class='form-check-input' type='radio' name='tipo' id='exampleRadios3' value='taijutsu'>
                        <label class='form-check-label' for='exampleRadios2'>
                            Taijutsu
                        </label>
                    </div>";
            }else{
                echo "<div class='form-check'>
                        <input class='form-check-input' type='radio' name='tipo' id='exampleRadios1' value='ninjutsu'>
                        <label class='form-check-label' for='exampleRadios1'>
                            Ninjutsu
                        </label>
                    </div>
                    <div class='form-check'>
                        <input class='form-check-input' type='radio' name='tipo' id='exampleRadios2' value='genjutsu'>
                        <label class='form-check-label' for='exampleRadios2'>
                            Genjutsu
                        </label>
                    </div>
                    <div class='form-check'>
                        <input class='form-check-input' type='radio' name='tipo' id='exampleRadios3' value='taijutsu' checked>
                        <label class='form-check-label' for='exampleRadios2'>
                            Taijutsu
                        </label>
                    </div>";
            }
            ?>

        <br>
        <div class="form-group">
            <label for="usuario">Usuarios</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario" value="<?php echo $consulta[3] ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripcion</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion" ><?php echo $consulta[4] ?></textarea>
        </div>
        <br><br>

        <button type="submit" datasrc="#" class="btn btn-primary">Modificar</button>

    </form>
</div>
</body>
</html>
