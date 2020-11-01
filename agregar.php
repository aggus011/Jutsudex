<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include("./Recursos/templates/bootstrap.php");
    ?>
    <link rel="stylesheet" href="Recursos/css/general.css">
    <link rel="stylesheet" href="Recursos/css/agregar.css">
    <title>Agregar un jutsu</title>
</head>
<?php
include("./Recursos/templates/header.php");
    ?>
    <body>
        <h1>¡Agrega un jutsu!</h1>
        <div class="contenedor">
        <form action="agregado.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nro">Nro</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="nro" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nombre">
            </div>
            <label>Tipo</label><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo" id="exampleRadios1" value="ninjutsu" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Ninjutsu
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo" id="exampleRadios2" value="genjutsu">
                <label class="form-check-label" for="exampleRadios2">
                    Genjutsu
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo" id="exampleRadios3" value="taijutsu">
                <label class="form-check-label" for="exampleRadios2">
                    Taijutsu
                </label>
            </div>
            <br>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Imagen del jutsu</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagen">
                </div>
            <div class="form-group">
                <label for="usuario">Usuarios</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
            </div>
            <br><br>

            <button type="submit" datasrc="#" class="btn btn-primary">Agregar</button>

        </form>
        </div>
    </body>
</html>
